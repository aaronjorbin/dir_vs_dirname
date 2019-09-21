#!/bin/bash

for i in {1..650}; 
	do /usr/bin/time -p php $TESTSCRIPT; 
done
