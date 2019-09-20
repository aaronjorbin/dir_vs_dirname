#!/bin/sh

for i in {1..100}; 
	do /usr/bin/time -p php $TESTSCRIPT; 
done
