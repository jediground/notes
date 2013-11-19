run `df`
```
ystem           1K-blocks      Used Available Use% Mounted on
/dev/sda9              5160576    489192   4409240  10% /
tmpfs                   998128      1240    996888   1% /dev/shm
/dev/sda6                99150     31306     62724  34% /boot
/dev/sda7             15481840    315184  14380224   3% /home
/dev/sda8              6192704   3066968   2811164  53% /usr
/dev/sda10             5160576    263108   4635324   6% /var
```

run `sudo fdisk -l`
```
   Device Boot      Start         End      Blocks   Id  System
/dev/sda1               2       54279   435982495+   f  W95 Ext'd (LBA)
Partition 1 does not end on cylinder boundary.
/dev/sda2   *       54279       54292      102400    7  HPFS/NTFS
Partition 2 does not end on cylinder boundary.
/dev/sda3           54292       60802    52292608    7  HPFS/NTFS
/dev/sda5            4706       54279   398195624    7  HPFS/NTFS
/dev/sda6               2          14      102400   83  Linux
/dev/sda7              15        1973    15728640   83  Linux
/dev/sda8            1973        2756     6291456   83  Linux
/dev/sda9            2756        3409     5242880   83  Linux
/dev/sda10           3409        4062     5242880   83  Linux
/dev/sda11           4062        4323     2097152   82  Linux swap / Solaris
/dev/sda12           4323        4705     3072000   83  Linux
```

20130718
```
df
Filesystem            Size  Used Avail Use% Mounted on
/dev/sda8             5.0G  325M  4.4G   7% /
tmpfs                 1.4G  232K  1.4G   1% /dev/shm
/dev/sda11             97M   31M   62M  34% /boot
/dev/sda6              15G  760M   14G   6% /home
/dev/sda7              12G  2.7G  8.6G  24% /usr
/dev/sda9             3.0G  170M  2.7G   6% /var
/dev/sda5             380G  264G  117G  70% /media/home

fdisk -l
 Device Boot      Start         End      Blocks   Id  System
 /dev/sda1               2       54279   435982495+   f  W95 Ext'd (LBA)
 Partition 1 does not end on cylinder boundary.
 /dev/sda2   *       54279       54292      102400    7  HPFS/NTFS
 Partition 2 does not end on cylinder boundary.
 /dev/sda3           54292       60802    52292608    7  HPFS/NTFS
 Partition 3 does not end on cylinder boundary.
 /dev/sda5            4706       54279   398195624    7  HPFS/NTFS
 /dev/sda6              15        1973    15728640   83  Linux
 /dev/sda7            1973        3539    12582912   83  Linux
 /dev/sda8            3539        4192     5242880   83  Linux
 /dev/sda9            4192        4584     3145728   83  Linux
 /dev/sda10           4584        4705      975872   82  Linux swap / Solaris
 /dev/sda11              2          14      102400   83  Linux
```
