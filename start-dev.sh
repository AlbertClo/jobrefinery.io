#!/bin/bash

# kill all screen sessions
pkill screen

# stop containers, if any are running
running_containers=$(docker ps -q) && [ -n "$running_containers" ] && docker kill $running_containers || echo "No running containers found."

./vendor/bin/sail up -d

screen -dmS vite
screen -dmS storybook
screen -dmS queue-default
screen -dmS queue-llm
screen -dmS pail
screen -dmS debug

screen -S vite -X stuff './vendor/bin/sail npm run dev\n'
screen -S storybook -X stuff './vendor/bin/sail npm run storybook\n'
screen -S queue-default -X stuff './vendor/bin/sail artisan queue:listen --tries=1\n'
screen -S queue-llm -X stuff './vendor/bin/sail artisan queue:listen --queue=prompt-llm\n'
screen -S pail -X stuff './vendor/bin/sail artisan pail\n'
screen -S debug -X stuff './vendor/bin/sail artisan dump-server\n'
