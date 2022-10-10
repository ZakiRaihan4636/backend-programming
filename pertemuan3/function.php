<?php

function luasLingkaran($jari)
{
  $phi = 22 / 7;
  return $phi * $jari * $jari;
}

echo luasLingkaran(14);
echo luasLingkaran(2);
