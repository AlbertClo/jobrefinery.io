variable "aws_region" {
    description = "AWS region"
    type        = string
    default     = "us-east-1"
}

variable "project_name" {
    description = "Project name for resource naming"
    type        = string
}

variable "tags" {
    description = "Tags to apply to resources"
    type        = map(string)
    default = {
        Environment = "production"
        ManagedBy   = "terraform"
    }
}
