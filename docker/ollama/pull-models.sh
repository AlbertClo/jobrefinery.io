#!/bin/bash

/bin/ollama serve &
pid=$!

sleep 2

echo "ollama pull llama3.2:3b start"
ollama pull llama3.2:3b
echo "ollama pull llama3.2:3b done"

echo "ollama pull llama3.2:3b-instruct-q8_0 start"
ollama pull llama3.2:3b-instruct-q8_0
echo "ollama pull llama3.2:3b-instruct-q8_0 done"

wait $pid
