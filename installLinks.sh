#!/bin/sh

mkdir -p ~/share/alternate
ln -s `pwd`/src/share ~/share/alternate
mkdir -p ~/script/alternate
ln -s `pwd`/src/php ~/script/alternate
mkdir -p ~/.vimplugins/alternate/plugin
ln -s `pwd`/src/vim/plugin ~/.vimplugins/alternate/plugin
