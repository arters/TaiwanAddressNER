# TaiwanAddressNER
解析台灣地址NER(Named Entity Recognition 命名實體識別)，GIS地理系統應用程式輔助用程式。

擷取台灣地址中任何一個區段，正則表達式(Regular Expression)台灣地址分析程式。

輸入一地址後，從非結構化的文本中抽取出特定意義或者指代性強的實體，並且可以按照業務需求識別出更多類別的實體。

<b>範例</b>


500 彰化縣彰化市進德路2707號10樓
```php
{
  "content": "500 彰化縣彰化市進德路2707號10樓",
  "zipcode": "500",
  "city": "彰化縣",
  "Township": "彰化市",
  "Road": "進德路",
  "Number": "2707號",
  "Floor": "10樓"
}
```
500 彰化縣彰化市進德路272號10-3樓
```php
{
    "zipcode": "500",
    "city": "彰化縣",
    "Township": "彰化市",
    "Road": "進德路",
    "Number": "272號",
    "Floor": "10-3樓",
}
```
522 彰化縣彰化市復興里進德路51號
```php
{
    "zipcode": "522",
    "city": "彰化縣",
    "Township": "彰化市",
    "Village": "復興里",
    "Road": "進德路",
    "Number": "51號",
}
```
桃園縣龜山鄉迴龍村萬壽路12-132號
```php
{
    "city": "桃園縣",
    "Township": "龜山鄉",
    "Village": "迴龍村",
    "Road": "萬壽路",
    "Number": "12-132號",
}
```
伸港鄉彰新路北7段402巷635-222弄2號
```php
{
    "Township": "伸港鄉",
    "Road": "彰新路",
    "Section": "北7段",
    "Lane": "402巷",
    "Alley": "635-222弄",
    "Number": "2號",
}
```
伸港鄉彰新路北七段402巷635弄2號A-33室
```php
{
    "Township": "伸港鄉",
    "Road": "彰新路",
    "Section": "北七段",
    "Lane": "402巷",
    "Alley": "635弄",
    "Number": "2號",
    "Room": "A-33室",
}
```

桃園縣XX區XX巷22弄100-3號
```php
{
    "city": "桃園縣",
    "content": "District",
    "Lane": "XX巷",
    "Alley": "22弄",
    "Number": "100-3號",
}
```

花蓮市達固湖灣大路100號
```php
{
    "city": "花蓮市",
    "Road": "達固湖灣大路",
    "Number": "100號",
}
```
工業區一路58巷11弄6號
```php
{
    "District": "工業區",
    "Road": "一路",
    "Lane": "58巷",
    "Alley": "11弄",
    "Number": "6號",
}
```

彰化市進德X路2巷161之1號
```php
{
    "city": "彰化市",
    "Road": "進德X路",
    "Lane": "2巷",
    "Number": "161之1號",
}
```
彰化市進德C路12巷12號
```php
{
    "city": "彰化市",
    "Road": "進德C路",
    "Lane": "12巷",
    "Number": "12號",
}
```
