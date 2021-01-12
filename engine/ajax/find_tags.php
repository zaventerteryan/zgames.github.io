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
?><?php $_F=__FILE__;$_X='P0ptP3FGcQ05ZyoNOXd3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3DTkKNVo2WnBNLzcKamRvTWQ3Ci0KeUkKbHYvNjQ3XUIKVDdmTVoKRFN2aHEKDTktLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ05CkY2NnE6Z2dmWDctZDddQntTaGcNOS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDTkKVnZxSVNNb0Y2CigyKQp9QUFSLX1BfUEKbHYvNjQ3XUIKVDdmTVoKRFN2aHENOXd3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3DTkKTkZNQgoydmY3Ck1CCnFTdjY3MjY3Zgp5SQoydnFJU01vRjYNOXd3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3DTkKY01YNzoKL01kZl82Wm9Ce3FGcQ05d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3cNOSpnDTkNOU0vKCFmNy9NZDdmKCc1YU5hcHRjamo0RHQ0aicpKQoxDTkJRjdaZjdTKAoibk5OLmc+ez4KUkFICmN2U3lNZmY3ZCIKKTsNOQlGN1pmN1MKKAoncHYyWjZNdmQ6Cnt7Z3t7ZycKKTsNOQlmTTcoCiJuWjI8TWRvClo2NjdPcTYhIgopOw05MA05DTlNLygKJF9ManI4amxOICdoQjdTX0ZaQkYncwp3dwoiIgpQTAokX0xqcjhqbE4gJ2hCN1NfRlpCRidzCiF3CiRmWDdfWHZvTWRfRlpCRgopCjENOQlmTTcoCiI3U1N2UyIKKTsNOTANOQ05TS8oCnFTN29fT1o2MkYoCiJnIFx8fFxtfFxKfFwifFwhfFw/fFwkfFxAfFxnfFxcXHxcJlx+XCpcK3NnIiwKJF9Eak4gJzY3U08ncwopCikKJDY3U08KdwoiIjsNOTdYQjcKJDY3U08KdwokZnktSkJaLzdCelgoCgpmWDdfQjZTNnZYdl03UygKRjZPWEJxNzJNWlgyRlpTQigKQjZTTXFfNlpvQigKQjZTTXFCWFpCRjdCKAo2U01PKAokX0RqTiAnNjdTTydzCikKKQopLApqNE5fcjhQTmpsLAokMnZkL01vICcyRlpTQjc2J3MKKSwKJDJ2ZC9NbyAnMkZaU0I3NidzCikKKTsNOQ05TS8oCiQ2N1NPCnd3CiIiCikKZk03KCIgcyIpOw05DTkkeWgvLzdTCncKIiBzIjsNOSQ2Wm9CCncKWlNTWkkKKCk7DTkNOU0vKCRfRGpOICdPdmY3J3MKd3cKIlsvTTdYZiIKKQoxDTkJDTkJJDY3U08KdwokZnktSkJaLzdCelgoCmZYN19CNlM2dlh2XTdTKApGNk9YQnE3Mk1aWDJGWlNCKAo2U01PKAokX0RqTiAnNjdTTydzCiksCmo0Tl9yOFBOamwsCiQydmQvTW8gJzJGWlNCNzYncwopLAokMnZkL01vICcyRlpTQjc2J3MKKQopOw05CSRmeS1Kemg3U0koImxqcGpWTgo2Wm89WlhoNwpaQgo2Wm8sClZQODROKCopCmFsCjJ2aGQ2CmNMUFQKIgp7Ci5MamN0Vwp7CiJfWy9CN1pTMkYKeG5qTGoKcFB4akwoYDZabz1aWGg3YCkKWE08NwonMSQ2N1NPMCUnCkRMUDguCmVRCjZabz1aWGg3ClBMNWpMCnlJCjJ2aGQ2CjVqbFYKcHRUdE4KPmkiKTsNOQ05MAo3WEI3CjENOQkNOQkkZnktSnpoN1NJKCJsanBqVk4KNlpvLApWUDg0TigqKQphbAoydmhkNgpjTFBUCiIKewouTGpjdFcKewoiXzZab0IKeG5qTGoKcFB4akwoYDZab2ApClhNPDcKJzEkNjdTTzAlJwpETFA4LgplUQo2Wm8KUEw1akwKeUkKMnZoZDYKNWpsVgpwdFR0Tgo+aSIpOw05CQ05MA05DTldRk1YNygkU3ZdCncKJGZ5LUpvNzZfU3ZdKCkpMQ05CQ05CSRTdl0gJzZabydzCncKQjZTX1M3cVhaMjcoIiZ6aHY2OyIsCidcIicsCiRTdl0gJzZabydzKTsNOQkkU3ZdICc2Wm8ncwp3CkI2U19TN3FYWjI3KCImI0FIazsiLAoiJyIsCiRTdl0gJzZabydzKTsNOQkNOQkkNlpvQiBzCncKJFN2XSAnNlpvJ3M7DTkNOTANOQ05TS8KKDJ2aGQ2KCQ2Wm9CKSkKJHloLy83Uwp3CiIgXCIie01PcVh2ZjcoIlwiLFwiIiwkNlpvQil7IlwicyI7DTkNOTcyRnYKJHloLy83UzsNOQ05P0o=';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCd2TEhFbGUwN2FzaGdQTnddLm5PMlpCdUc5QXlqSVMzVjhxMXtZSwptPkQ2bz1DV3RYaWtyUXogTWJmUltkPC81RlVUcEpjeDR9Jywnb1IzelNCfWVBXXUvT1Q9d1BIbWNhczZKCjBiRXlyN0NVcHsuWjggPDFHdGd2S1hJbDU5UVlxW2lWZDR4bmtmRGhqTUw+RldOMicpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>