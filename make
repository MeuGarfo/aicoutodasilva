#!/bin/bash
clear

instalar() {
    rm -rf inc
    git clone git@github.com:aicoutodasilva/inc.git
    composer install
    echo "pronto"
}

if [ -z "$1" ]
    then
        echo "Digite a opção:"
        echo "1) instalar"
        printf "Opção número "
        read opt
    else
        opt=$1
fi

case $opt
in
    1) instalar ;;
    *) echo "opção inválida" ;;
esac


