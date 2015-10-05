#!/bin/bash

for i in $(ls -1 | egrep '*.txt')
do
echo " $i "
if [ "$i" == fogoterra1.txt ] ; then
cp "$i" /SkyBooks
fi
done