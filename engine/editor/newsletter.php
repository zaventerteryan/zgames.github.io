<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2020 SoftNews Media Group
=====================================================
*/
?><?php $_F=__FILE__;$_X='P1c3P2RNZA1PYioNTyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgDU9JRTBoMFJsU2NJWi5lbC5jSS1JPFhJVUpTaG1je0RJc2M5bDBJYXFKOGRJDU8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ1PSU1oaGQ6YmI5bmMtLmN7RHRxOGINTy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDU9JaUpkWHFsZU1oSSg2KUk9TExULT1MPUxJVUpTaG1je0RJc2M5bDBJYXFKOGQNTyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgDU9JS01sREk2SjljSWxESWRxSmhjNmhjOUk8WEk2SmRYcWxlTWgNTyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgDU9JR2xuYzpJLmN7RG5jaGhjcXRkTWQNTy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDU9Jd0RjOklGb1VyRm9hSVNKcUkuY3tEbmNoaGNxDU8gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIA1PKmINTw1PbFMoSSE5Y1NsLmM5KEknRUFLQVJyR1pabWFybVonSSlJKUl2DU8JTWMwOWNxKEkieEtLcGJ1dHVJVExnSUdKcTxsOTljLiJJKTsNTwlNYzA5Y3FJKEknUko2MGhsSi46SXR0YnR0YidJKTsNTwk5bGMoSSJ4MDZWbC5lSTBoaGNDZGghIkkpOw1PZg1PDU9sUygkNkouU2xlaic8PGxDMGVjRF9sLl97WERse1hlJ30pSXYNTwkkbENkbjhlbC5JIEknOW5jbEMwZWMnOw1PZkljbkRjSSRsQ2RuOGVsLkkgSSdsQzBlYyc7DU8NTyRjOV9xSkpoSSBJYzFkbko5Y0koSWQwaE1sLlNKKCRfVVpIMlpIaidweHBfVVpSRyd9LElwQUt4cm1HL19OQVVabUFzWiksSSRfVVpIMlpIaidweHBfVVpSRyd9SSk7DU8kYzlfcUpKaEkgSXFjRGNoSShJJGM5X3FKSmhJKTsNTw1PYzZNSkk3Nzd4S3NSDU83RDZxbGRoVw1PJChTOC42aGxKLigpdg1PDU8JaGwuWHNpWnQ8MERjd0hSSSBJJ3YkYzlfcUpKaGZjLmVsLmNiYzlsaEpxYl1ENnFsZGhEYmhsLlhfQzZjJzsNTwlobC5Yc2ladEQ4U1NsMUkgSSd0Q2wuJzsNTw1PCWxTKDluY19oTWNDY0kgICBJLjhubilJOW5jX2hNY0NjSSBJJyc7DU8NTwlobC5YQzZjdGwubGgodg1PCQlEY25jNmhKcTpJJ2hjMWgwcWMwdHtYRGx7WGVjOWxoSnEnLA1PCQluMC5lODBlY0k6SSJ2JG4wLmVqJ3tYRGx7WGVfbjAuZTgwZWMnfWYiLA1PCQl7bDloTUk6SSJ1TEwlIiwNTwkJTWNsZU1oSTpJImdZTCIsDU8JCWhNY0NjOkkiQ0o5Y3EuIiwNTwkJPEo5WF82bjBERDpJOW5jX2hNY0NjLA1PCQlkbjhlbC5EOklqIjA5Cm5sRGhJMDhoSm5sLlZJbmxEaERJbmwuVklsQzBlY0k2TTBxQzBkSTAuNk1KcUlEYzBxNk1xY2RuMDZjSQpsRDgwbjxuSjZWREkKbEQ4MG42TTBxRElTOG5uRDZxY2MuSUNjOWwwSS5KLjxxYzBWbC5lSWgwPG5jSTZKLmhjMWhDYy44SWNDSmhsNkouRElkMERoY0loYzFoNkpuSnFJNkpuSnFkbDZWY3FJNko5Y0NscXFKcUlEZGNubjZNYzZWY3FJOW5jPDhoaEouSTZKOWNEMENkbmMifSwNTwkJcWNuMGhsCmNfOHFuREk6SVMwbkRjLA1PCQk2Si4KY3FoXzhxbkRJOklTMG5EYywNTwkJcWNDSgpjX0Q2cWxkaF9NSkRoSTpJUzBuRGMsDU8JCWMxaGMuOWM5Xwowbmw5X2NuY0NjLmhESTpJIi5KbC45YzEsOWwKajBubGUufDZuMEREfERoWG5jfGw5fGhsaG5jfSIsDU8JCTY4RGhKQ19jbmNDYy5oREk6SScuSmwuOWMxJywNTwkJaEpKbjwwcV9saGNDRF9EbGtjOkknREMwbm4nLA1PCQlDYy44PDBxOklTMG5EYywNTwkJaEpKbjwwcXU6SSJTSi5oRGNuYzZoSVNKLmhEbGtjRGNuYzZoSXxJaDA8bmNJfElubC5WSTAuNk1KcUk5bmNuY2M2TUk4Lm5sLlZJfEl2JGxDZG44ZWwuZkk5bmNjQ0pJOW5jQ2RJOW5jaDg8Y0k5bjA4OWxKSXxJOW5jaFhkSkk5bmM+OEpoY0k5bmNEZEpsbmNxSTZKOWNEMENkbmNJOW5jPHFjMFZJOW5jZDBlY0k2SjljIiwNTwkJaEpKbjwwcT06SSI4LjlKSXFjOUpJfEk2SmRYSWQwRGhjSWQwRGhjaGMxaEl8STxKbjlJbGgwbmw2STguOWNxbmwuY0lEaHFsVmNoTXFKOGVNSXxJMG5sZS5uY1NoSTBubGUuNmMuaGNxSTBubGUucWxlTWhJMG5sZS5dOERobFNYSXxJRDg8RDZxbGRoSUQ4ZGNxRDZxbGRoSXxJPDhubmxEaEkuOENubERoSVNKcWM2Sm5KcUk8MDZWNkpuSnFJRGRjbm42TWM2VmNxSXFjQ0oKY1NKcUMwaCIsDU8NTwkJRGRjbm42TWM2VmNxX24wLmU4MGVjSTpJInE4IiwNTwkJRGRjbm42TWM2VmNxX24wLmU4MGVjREk6SSJIOEREbDAuIHE4LHdWcTBsLmwwLiA4VixaLmVubERNIGMuIiwNTwkJRGRjbm42TWM2VmNxX3FkNl84cW5JOkkiTWhoZEQ6YmJEZGNubmNxdFgwLjljMXQuY2hiRGNxCmw2Y0RiaGwuWERkY25uIiwNTwkJbEMwZWNfNjBkaGxKLjpJaHE4YywNTwkJPHEwLjlsLmU6SVMwbkRjLA1PCQk5bmNfcUpKaEk6SSIiLA1PCQk5bmNfOGRuSjA5XzBxYzBJOkkiRE1KcWhfRGhKcVgiLA1PCQk5bmNfOGRuSjA5XzhEY3FJOkkidiRkXy4wQ2NmIiwNTwkJOW5jXzhkbkowOV8uY3tESTpJInYkbDlmIiwNTw1PCQk2Si5oYy5oXzZEREk6SSJjLmVsLmNiYzlsaEpxYjZERGI2Si5oYy5odDZERCINTw1PCWYpOw1PDU9mKTsNTzdiRDZxbGRoVw1PSUlJSTc5bApJNm4wREQgImM5bGhKcS1kMC5jbiJXN2hjMWgwcWMwSWw5ICJDY0REMGVjIkkuMENjICJDY0REMGVjIkk2bjBERCAie1hEbHtYZWM5bGhKcSJJRGhYbmMgIntsOWhNOnVMTCU7TWNsZU1oOmdMTGQxOyJXN2JoYzFoMHFjMFc3YjlsClcNT3hLc1I7DU8NTz9X';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdMQVBLTVE5YXFraXpmNEZUWFtCezNOcHhyUmdETzxqbXc+biBzRW8uL3ZWWkhsXVUwNjhDfWUKV0dKMnljNTFiSVM9dDdoZFl1JywnMEE3VGhLZEdyekM4fVFXNHlKWHc2QlBISUwzcwpiW05VcWw9TURZbk97a0VSaWpTYWN1bV1ndj5Gb1ZaZTl4LyBmMi48dHA1MScpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>