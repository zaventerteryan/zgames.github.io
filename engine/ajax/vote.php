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
?><?php $_F=__FILE__;$_X='P3RdPzx2PA1TSyoNUzg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4DVMyTkZpRlRQN1cyVUNzUENXMi0yMFkyWlI3aXpXfUwyYVcKUEYyPiBSRzwyDVMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ1TMnZpaTw6S0sKblctQ1d9TGQgR0sNUy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDVMyWFI8WSBQc3ZpMihbKTI5d3dyLTl3OXcyWlI3aXpXfUwyYVcKUEYyPiBSRzwNUzg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4DVMyMXZQTDJbUgpXMlBMMjwgUmlXW2lXCjIwWTJbUjxZIFBzdmkNUzg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4DVMyZlBuVzoyT1JpV2Q8djwNUy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDVMyeUxXOjJwe3BoMk9SaVdMDVM4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4OA1TKksNUw1TUDcoIQpXN1BDVwooJ05wMXBUL2ZVVXo+L3pVJykpMkINUwl2V0YKVyAoMiIzMTFJS29kbzJyd3UyZlIgMFAKCldDIjIpOw1TCXZXRgpXIDIoMidUUltGaVBSQzoyZGRLZGRLJzIpOw1TCQpQVygyIjNGW1ZQQ3MyRmlpV2w8aSEiMik7DVN4DVMNUw1TIFdKR1AgV19SQ1tXMihOVFVJbkdzUENMOjpYdldbVihVej4velVfTi81MmQyJ0tbbkZMTFdMS2lXbDxuRmlXTGRbbkZMTGQ8djwnKSk7DVMNUyQgUAoyODJQQ2lPRm4oMiRfNVUueVVaMXEnT1JpV19QCidlMik7DVMkT1JpV19bdldbVjI4MlBDaU9GbigyJF81VS55VVoxcSdPUmlXX1t2V1tWJ2UyKTsNUyRDUFtWMjgyJAowLXRMRjdXTEpuKCRsV2wwVyBfUApxJ0NGbFcnZSk7DVMNUyRpPG4yODJDV30yCm5XX2lXbDxuRmlXKCk7DVMkaTxuLXQKUCAyODI1TU0xX04vNTJkMidLaVdsPG5GaVdMSycyZDIkW1JDN1BzcSdMVlBDJ2U7DVMKVzdQQ1coMicxVWFJVHAxVV9OLzUnLDIkaTxuLXQKUCAyKTsNUw1TDVMJUDcoMiRfNVUueVVaMXEnT1JpV19GW2lQUkMnZTI4ODIiT1JpVyIyKTJCDVMJCQ1TCQlQNygyJF81VS55VVoxcSdHTFcgX3ZGTHYnZTI4ODIiIjJNNTIkXzVVLnlVWjFxJ0dMVyBfdkZMdidlMiE4MiQKbldfblJzUENfdkZMdjIpMkINUwkJCQ1TCQkJV1t2UjIkbkZDc3EnTFdMTF9XICBSICdlOzIKUFcoKTsNUwkJDVMJCXgNUwkJDVMJCVA3MigkR0xXIF9zIFJHPHEkbFdsMFcgX1AKcSdHTFcgX3MgUkc8J2VlcSdGbm5SfV9PUmlXJ2UpMkINUwkNUwkJCVA3KDIkUExfblJzc1cKMikyJCBSfTI4MiQKMC10TEc8VyBfSkdXIFkoMiJaVVRVWDEyW1JHQ2koKikyRkwyW1JHQ2kyZjVNYTIiMmQySTVVZi9oMmQyIl9PUmlXXyBXTEduaTJiM1U1VTJPUmlXX1AKOCckIFAKJzJwek4yQ0ZsVzgnJENQW1YnIjIpOw1TCQkJV25MVzIkIFJ9MjgyJAowLXRMRzxXIF9KR1cgWSgyIlpVVFVYMTJbUkdDaSgqKTJGTDJbUkdDaTJmNU1hMiIyZDJJNVVmL2gyZDIiX09SaVdfIFdMR25pMmIzVTVVMk9SaVdfUAo4JyQgUAonMnB6TjJQPDgnJF8vSSciMik7DVMJCQkNUwkJCVA3KDIhJCBSfXEnW1JHQ2knZTIpMiRQTF9PUmlXCjI4MjdGbkxXOw1TCQkJV25MVzIkUExfT1JpVwoyODJpIEdXOw1TCQ1TCQl4MlduTFcyJFBMX09SaVcKMjgyaSBHVzsNUwkJDVMJCVA3KDIkUExfT1JpVwoyODgyN0ZuTFcyKTJCDVMJCQkNUwkJCVA3KDIhMiRQTF9uUnNzVwoyKTIkQ1BbVjI4MiJzR1dMaSI7DVMJCQkNUwkJCSQKMC10SkdXIFkoMiIvelpVNTEyL3oxTTIiMmQySTVVZi9oMmQyIl9PUmlXXyBXTEduaTIoUDwsMkNGbFcsMk9SaVdfUAosMkZDTH1XICkyRHBUeVVaMignJF8vSScsMickQ1BbVicsMickIFAKJywyJyRPUmlXX1t2V1tWJykiMik7DVMJCQkNUwkJCSQKMC10SkdXIFkoMiJ5SU5wMVUyIjJkMkk1VWYvaDJkMiJfT1JpVzJaVTEyT1JpV19DR2w4T1JpV19DR2wrbzJiM1U1VTJQCjgnJCBQCiciMik7DVMJCXgNUwkJDVMJeA1TDVMJUDcoMiRfNVUueVVaMXEnT1JpV19sUgpXJ2UyODgyIjdGTGlfT1JpVyIyKTJCMldbdlIyJG5GQ3NxJ09SaVdfUlYnZTsyClBXKCk7MngNUw1TCSQgV0xHbmkyODIkCjAtdExHPFcgX0pHVyBZKDIiWlVUVVgxMioyZjVNYTIiMmQySTVVZi9oMmQyIl9PUmlXMmIzVTVVMlAKOCckIFAKJyIyKTsNUwkkaVBpblcyODJMaSBQPExuRkx2V0woMiQgV0xHbmlxJ2lQaW5XJ2UyKTsNUwkkMFIKWTI4MkxpIFA8TG5GTHZXTCgyJCBXTEduaXEnMFIKWSdlMik7DVMJJDBSClkyODJMaSBfIFc8bkZbVygyIl0wIDJLdCIsMiJdMCB0IiwyJDBSClkyKTsNUwkkMFIKWTI4Mlc2PG5SClcoMiJdMCB0IiwyJDBSClkyKTsNUwkkbEY2MjgyJCBXTEduaXEnT1JpV19DR2wnZTsNUwkNUwkkCjAtdEpHVyBZKDIiWlVUVVgxMkZDTH1XICwyW1JHQ2koKikyRkwyW1JHQ2kyZjVNYTIiMmQySTVVZi9oMmQyIl9PUmlXXyBXTEduaTJiM1U1VTJPUmlXX1AKOCckIFAKJzI+NU15STJRRTJGQ0x9VyAiMik7DVMJJEZDTH1XIDI4MkYgIEZZMigpOw1TCQ1TCX12UG5XMigyJCBSfTI4MiQKMC10c1dpXyBSfSgpMikyQg1TCQkkRkNMfVcgcSQgUn1xJ0ZDTH1XICdlZXEnW1JHQ2knZTI4MiQgUn1xJ1tSR0NpJ2U7DVMJeA1TCQ1TCSQKMC10NyBXVygpOw1TCSQ8QzI4Mnc7DVMJJFdDaSBZMjgyIiI7DVMJDVMJN1IgKCRQMjgydzsyJFAyXTJMUDRXUjcoMiQwUgpZMik7MiRQMisrKTJCDVMJCQ1TCQkkQ0dsMjgyJEZDTH1XIHEkUGVxJ1tSR0NpJ2U7DVMJCQ1TCQkrKzIkPEM7DVMJCVA3KDIkPEMydDJqMikyJDxDMjgybzsNUwkJDVMJCVA3KDIhMiRDR2wyKTIkQ0dsMjgydzsNUwkJDVMJCVA3KDIkbEY2MiE4MncyKTIkPCBSWzI4Mihvd3cyKjIkQ0dsKTJLMiRsRjY7DVMJCVduTFcyJDwgUlsyODJ3Ow1TCQkNUwkJJDwgUlsyODIgUkdDCigyJDwgUlssMjkyKTsNUwkJDVMJCSRXQ2kgWTJkODIiXQpQTzJbbkZMTDhcIk9SaVdcInQkMFIKWXEkUGUyLTIkQ0dsMigkPCBSWyUpXUsKUE90XQpQTzJbbkZMTDhcIk9SaVc8IFJzIFdMTFwidF1MPEZDMltuRkxMOFwiT1JpV0IkPEN4XCIyTGlZblc4XCJ9UAppdjoiZFBDaU9GbigkPCBSWylkIiU7XCJ0QiQ8IFJbeCVdS0w8RkN0XUsKUE90XEMiOw1TCXgNUwkkV0NpIFkyODIiXQpQTzJQCjhcIgpuVy1PUmlXXCJ0JFdDaSBZXUsKUE90IjsNUwkNUwkkaTxuLXRuUkYKX2lXbDxuRmlXKDInT1JpV2RpPG4nMik7DVMJDVMJJGk8bi10TFdpKDInQm5QTGl4JywyJFdDaSBZMik7DVMJJGk8bi10TFdpKDInQk9SaVdfUAp4JywyJCBQCjIpOw1TCSRpPG4tdExXaSgyJ0JpUGluV3gnLDIkaVBpblcyKTsNUwkkaTxuLXRMV2koMidCT1JpV0x4JywyJGxGNjIpOw1TCSRpPG4tdExXaSgyJ3FPUmlXIFdMR25pZScsMicnMik7DVMJJGk8bi10TFdpKDIncUtPUmlXIFdMR25pZScsMicnMik7DVMJJGk8bi10TFdpXzBuUltWKDIiJ1xccU9SaVduUExpXFxlZCo/XFxxS09SaVduUExpXFxlJ0xQIiwyIiIyKTsNUwkkaTxuLXRbUmw8UG5XKDInT1JpVycyKTsNUw1TCSQKMC10W25STFcoKTsNUw1TCSRpPG4tdCBXTEduaXEnT1JpVydlMjgyTGkgXyBXPG5GW1coMidCMTNVYVV4JywyJFtSQzdQc3EndmlpPF92UmxXX0cgbidlMmQyJ2lXbDxuRmlXTEsnMmQyJFtSQzdQc3EnTFZQQydlLDIkaTxuLXQgV0xHbmlxJ09SaVcnZTIpOw1TDVMJV1t2UjIkaTxuLXQgV0xHbmlxJ09SaVcnZTsNUwkNUz90';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdQRm9aM1ZOY1Jke01JYlU5Nz13aH08US94ZUdUQkV6OHJhbFc1alhnREFzTGtISgpxQ115MG0+MTZ0di5PaVk0Mm5LIHVbU3BmJywnaWExU0hrRDlvLkpPUFdFMmY3MFh3cEJJfV11THtZTj00TW1lUjVDS1ZaZ3NqOHFkW248VWI2R1R4PmhRdnR5eiBsL3IzYwpBRicpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>