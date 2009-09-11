#!/bin/sh

for configFile in `ls src/share/*`
do
  cp -i $configFile ~/share/alternate/
done

for backendFile in `ls src/php/*`
do
  cp -i $backendFile ~/script
done

for clientFile in `ls src/vim/plugin/*`
do
  cp -i $clientFile ~/.vim/plugin
done
