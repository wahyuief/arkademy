#!/usr/bin/env python

def prima(kolom, baris):
    batas = 40
    nomor = set(range(batas, 1, -1))
    prima = []
    while nomor:
        p = nomor.pop()
        prima.append(p)
        nomor.difference_update(set(range(p*2, batas+1, p)))
    for i in range(0, len(prima) - 1, kolom):
        print(prima[i:i+kolom])

prima(3,4)
