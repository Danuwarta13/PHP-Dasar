<?php

// Cara membuat cookie
// prameter 1: nama cookie
// prameter 2: isi cookie
// prameter 3: waktu kadaluarsa cookie (dalam detik)
// prameter 4: path cookie (defaultnya adalah path dari file yang membuat cookie)
// prameter 5: domain cookie (defaultnya adalah domain dari file yang membuat cookie)
// prameter 6: secure cookie (defaultnya adalah false)
// prameter 7: httponly cookie (defaultnya adalah false)
// prameter 8: samesite cookie (defaultnya adalah Lax)
setcookie('nama', 'Rhinozz', time() + 60);
