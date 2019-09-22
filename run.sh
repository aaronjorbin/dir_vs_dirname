#!/bin/bash

for i in {1..500}; 
	do /usr/bin/time -p php $TESTSCRIPT; 
done
