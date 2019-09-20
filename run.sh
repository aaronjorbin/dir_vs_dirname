#!/bin/bash

for i in {1..400}; 
	do /usr/bin/time -p php $TESTSCRIPT; 
done
