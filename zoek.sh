#!/bin/bash
find -P   . -path "./vendor" -prune -o  -name '*php'   -print  | xargs grep $1

