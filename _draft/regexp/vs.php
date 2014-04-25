<?php

# preg_match stops after the first match.
# preg_match_all gets *all* the matches.

$str = "foofoo";

preg_match('/foo/', $str, $match);
var_dump($match);
        
preg_match_all('/foo/', $str, $match);
var_dump($match);
