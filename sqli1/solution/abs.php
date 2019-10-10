<?php
# untuk mengetahui hasil dari (int)abs(log10(pow(23,13))*rand(1,2)

for ($i=0;$i<10;$i++){
    echo (int)abs(log10(pow(23,13))*rand(1,2))."<br>";
}

# Running: 
// 35
// 35
// 35
// 17
// 17
// 17
// 17
// 17
// 17
// 35

# Dari situ dapat dilihat bahwa 
# number yang di generate selalu diantara 17, atau 35
?>