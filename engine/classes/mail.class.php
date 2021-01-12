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
?><?php $_F=__FILE__;$_X='P1o1PzB3MA1EYSoNRDMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzDURSY2dbZz10cHpSQVVIdFV6Ui1SZG9Sa2xwW0x6CjdSIHoxdGdSSWVsfTBSDUQtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ1EUndbWzA6YWExbnotVXoKN1llfWENRC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDURSbWwwb2V0SHdbUihqKVJiOTl7LWI5YjlSa2xwW0x6CjdSIHoxdGdSSWVsfTANRDMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzDURST3d0N1JqbDF6UnQ3UjBlbFt6alt6MVJkb1JqbDBvZXRId1sNRDMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzDURSWHRuejpSV2d0bllqbmc3N1kwdzANRC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDURSQzd6OlIgZ3RuUmpuZzc3DUQzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMw1EKmENRA1EdHAoUiExenB0VXoxKFInY0tPSz1FWEFBTElFTEEnUilSKVJNDUQJd3pnMXplKFIieE9POGFmWWZSezlUUlhsZWR0MTF6VSJSKTsNRAl3emcxemVSKFInPWxqZ1t0bFU6UllZYVlZYSdSKTsNRAkxdHooUiJ4Z2pCdFVIUmdbW3pXMFshIlIpOw1EXQ1EDURlemh9dGV6X2xVanpSKGM9QThufUh0VTc6Om13empCKEp5eU9fY0VKUllSJ2F6VUh0VXpham5nNzd6N2FXZ3RuYWpuZzc3WTB3MFdndG56ZVkwdzAnKSk7DUQNRGpuZzc3UjFuel9XZ3RuUk0NRA1ECTB9ZG50alIkV2d0blIzUnBnbjd6Ow1ECTB9ZG50alIkN3pVMV96ZWVsZVIzUnBnbjd6Ow1ECTB9ZG50alIkN1dbMF9XN0hSM1IiIjsNRAkwfWRudGpSJHBlbFdSM1JwZ243ejsNRAkwfWRudGpSJHdbV25fV2d0blIzUnBnbjd6Ow1ECTB9ZG50alIkZGpqUjNSZ2VlZ29SKCk7DUQJMH1kbnRqUiRCenowZ250VnpSM1JwZ243ejsNRAkNRAlwfVVqW3RsVVJfX2psVTdbZX1qWygkamxVcHRILFIkdDdfd1tXblIzUnBnbjd6KVJNDUQJCQ1ECQkkW3d0Ny1aV2d0blIzUlV6ClI4eDggZ3RuemU7DUQJCSRbd3Q3LVpXZ3RuLVptd2dla3pbUjNSJGpsVXB0SE4nandnZTd6WycuOw1ECQkkW3d0Ny1aV2d0bi1aQVVqbDF0VUhSM1IiZGc3elB7IjsNRA1ECQkkamxVcHRITidXZ3RuX1t0W256Jy5SM1I3W2VfZXowbmdqeihSJyZnVzA7JyxSJyYnLFIkamxVcHRITidXZ3RuX1t0W256Jy5SKTsNRA1ECQl0cChSJGpsVXB0SE4nV2d0bl9bdFtueicuUilSTQ1ECQkJJFt3dDctWldndG4tWjd6W1hlbFcoJGpsVXB0SE4nZzFXdFVfV2d0bicuLFIkamxVcHRITidXZ3RuX1t0W256Jy4pOw1ECQldUnpuN3pSTQ1ECQkJJFt3dDctWldndG4tWjd6W1hlbFcoUiRqbFVwdEhOJ2cxV3RVX1dndG4nLlIpOwkJCQ1ECQldDUQJCQ1ECQl0cCgkamxVcHRITidXZ3RuX1d6W2wxJy5SMzNSIjdXWzAiKVJNDUQJCQkkW3d0Ny1aV2d0bi1adDdrIE84KCk7DUQJCQkkW3d0Ny1aV2d0bi1aT3RXemx9W1IzUmY5Ow1ECQkJJFt3dDctWldndG4tWmsgTzhLfVtsTz1rUjNScGduN3o7DUQJCQkkW3d0Ny1aV2d0bi1aeGw3W1IzUiRqbFVwdEhOJzdXWzBfd2w3WycuOw1ECQkJJFt3dDctWldndG4tWjhsZVtSM1J0VVtWZ24oUiRqbFVwdEhOJzdXWzBfMGxlWycuUik7DUQJCQkkW3d0Ny1aV2d0bi1aayBPOGt6an1lelIzUiRqbFVwdEhOJzdXWzBfN3pqfWV6Jy47DUQNRAkJCXRwKCRbd3Q3LVpXZ3RuLVprIE84a3pqfWV6UjMzUic3N24nKVJNDUQJCQkJJFt3dDctWldndG4tWmsgTzh5MFt0bFU3UjNSZ2VlZ28oIjc3biIzWmdlZWdvKCJWemV0cG9fMHp6ZSIzWnBnbjd6LCJWemV0cG9fMHp6ZV9VZ1d6IjNacGduN3opKTsNRAkJCV0NRA1ECQkJdHAoJFt3dDctWldndG4tWmsgTzhremp9ZXpSMzNSJ1tuNycpUk0NRAkJCQkkW3d0Ny1aV2d0bi1aayBPOHkwW3RsVTdSM1JnZWVnbygiW243IjNaZ2VlZ28oIlZ6ZXRwb18wenplIjNacGduN3osIlZ6ZXRwb18wenplX1VnV3oiM1pwZ243eikpOw1ECQkJXQ1EDUQJCQl0cChSJGpsVXB0SE4nN1dbMF99N3plJy5SKVJNDUQJCQkJJFt3dDctWldndG4tWmsgTzhLfVt3UjNSW2V9ejsNRAkJCQkkW3d0Ny1aV2d0bi1aQzd6ZVVnV3pSM1IkamxVcHRITic3V1swX303emUnLjsNRAkJCQkkW3d0Ny1aV2d0bi1aOGc3NwpsZTFSM1IkamxVcHRITic3V1swXzBnNzcnLjsNRAkJCV0NRAkJCQ1ECQkJdHAoUiRqbFVwdEhOJzdXWzBfV2d0bicuUilSTQ1ECQkJCSRbd3Q3LVpXZ3RuLVpYZWxXUjNSJGpsVXB0SE4nN1dbMF9XZ3RuJy47DUQJCQkJJFt3dDctWldndG4tWmt6VTF6ZVIzUiRqbFVwdEhOJzdXWzBfV2d0bicuOw1ECQkJXQ1ECQldDUQJCQ1ECQkkW3d0Ny1aV2d0bi1aMiBndG56ZVIzUiJjPUFSbSBrIjsNRAkJDUQJCXRwUihSJHQ3X3dbV25SKVJNDUQJCQkkW3d0Ny1aV2d0bi1adDd4TyA9KCk7DUQJCQkkW3d0Ny1ad1tXbl9XZ3RuUjNSW2V9ejsNRAkJXQ1ECV0NRAkNRAlwfVVqW3RsVVI3elUxKCRbbCxSJDd9ZFF6alssUiRXejc3Z0h6KVJNDUQJCQ1ECQl0cChSJFt3dDctWnBlbFdSKVJNDUQJCQkkW3d0Ny1aV2d0bi1aZzExSnowbm9PbCgkW3d0Ny1acGVsVyxSJFt3dDctWnBlbFcpOw1ECQldDUQJCQ1ECQkkW3d0Ny1aV2d0bi1aZzExSzExZXo3NygkW2wpOw1ECQkkW3d0Ny1aV2d0bi1aa31kUXpqW1IzUiQ3fWRRempbOw1ECQkNRAkJdHAoJFt3dDctWldndG4tWiBndG56ZVIzM1InN1dbMCdSS0xjUiRbd3Q3LVpCenowZ250VnpSKVJNDUQJCQkkW3d0Ny1aV2d0bi1aayBPOEd6ejBLbnRWelIzUltlfXo7DUQJCV0NRAkJDUQJCXRwKFIkW3d0Ny1ad1tXbl9XZ3RuUilSTQ1ECQkJJFt3dDctWldndG4tWlc3SHhPID0oJFd6NzdnSHopOw1ECQldUnpuN3pSTQ1ECQkJJFt3dDctWldndG4tWjxsMW9SM1IkV3o3N2dIejsNRAkJXQ1EDUQJCXRwKFJqbH1VWyhSJFt3dDctWmRqalIpUilSTQ1ECQkJDUQJCQlwbGV6Z2p3KCRbd3Q3LVpkampSZzdSJGRqailSTQ1ECQkJCSRbd3Q3LVpXZ3RuLVpnMTE8bW0oJGRqaik7DUQJCQldDUQJCQkNRAkJXQ1ECQkNRAkJdHBSKCEkW3d0Ny1aV2d0bi1aN3pVMSgpKVJNDUQJCQkkW3d0Ny1aN1dbMF9XN0hSM1IkW3d0Ny1aV2d0bi1aQWVlbGVFVXBsOw1ECQkJJFt3dDctWjd6VTFfemVlbGVSM1JbZX16Ow1ECQldDUQJCQ1ECQkkW3d0Ny1aV2d0bi1aam56Z2VLbm5Kemp0MHR6VVs3KCk7DUQJCSRbd3Q3LVpXZ3RuLVpqbnpnZUtbW2dqd1d6VVs3KCk7DUQJCSRbd3Q3LVpXZ3RuLVpqbnpnZW19N1tsV3h6ZzF6ZTcoKTsNRAkNRAldDUQNRFJSUlJwfVVqW3RsVVJnMTFtfTdbbFd4emcxemUoJFVnV3osUiRWZ259elIzUlV9bm4pUk0NRFJSUlJSUlJSJFt3dDctWldndG4tWmcxMW19N1tsV3h6ZzF6ZShSJFVnV3osUiRWZ259elIpOw1EUlJSUl0NRA1ECXB9VWpbdGxVUmcxMUtbW2dqd1d6VVsoJDBnW3csUiRVZ1d6UjNSJycsUiR6VWpsMXRVSFIzUidkZzd6UHsnLFIkW28welIzUicnLFIkMXQ3MGw3dFt0bFVSM1InZ1tbZ2p3V3pVWycpUk0NRAkJJFt3dDctWldndG4tWmcxMUtbW2dqd1d6VVsoUiQwZ1t3LFIkVWdXeixSJHpVamwxdFVILFIkW28weixSJDF0NzBsN3RbdGxVUik7DUQJXQ1EXQ1EP1o=';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdPcGc3YlpVcwo0MkxHOTh5PUY+bDFJPERKUkVqbmNIZVR6NVBrMHFBaHt3S1sudk1YWUNdcnhWIHVXL2FpNn1tM29TdEJRZmROJywnVGZhczI+bnh3OFhOSzBQT0xRVm9kR0IKUiBJY2xEZ3IzZTw2U3A1RXE0aEF0XVp7Ri5VfUpIdk16bTcvVzl1Qz15WWlrajFiWycpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>