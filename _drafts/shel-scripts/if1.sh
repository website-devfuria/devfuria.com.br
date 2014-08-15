echo -n "Palavra 1: "
read word1
echo -n "Palavra 2: "
read word2

if test "$word1" = "$word2"
    then
        echo "iguais"
fi

echo "the end"