terraform {
    required_providers {
        aws = {
            source  = "hashicorp/aws"
            version = "~> 5.0"
        }
    }
}

provider "aws" {
    region = var.aws_region
}

resource "aws_iam_user" "job_refinery" {
    name = var.project_name
    tags = var.tags
}

resource "aws_iam_access_key" "job_refinery" {
    user = aws_iam_user.job_refinery.name
}

resource "aws_iam_policy" "job_refinery_bedrock_access" {
    name        = "${var.project_name}-bedrock-policy"
    description = "Policy for Job Refinery for accessing AWS Bedrock"

    policy = jsonencode({
        Version = "2012-10-17"
        Statement = [
            {
                Effect = "Allow"
                Action = [
                    "bedrock:*",
                    "bedrock-runtime:*"
                ]
                Resource = "*"
            }
        ]
    })
}

resource "aws_iam_user_policy_attachment" "job_refinery_bedrock_access" {
    user       = aws_iam_user.job_refinery.name
    policy_arn = aws_iam_policy.job_refinery_bedrock_access.arn
}

output "access_key_id" {
    value = aws_iam_access_key.job_refinery.id
}

output "secret_access_key" {
    value     = aws_iam_access_key.job_refinery.secret
    sensitive = true
}
