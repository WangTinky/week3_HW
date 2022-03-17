<html>
<head>
        <title>旅遊導覽</title>
        <link rel="icon" href="789.jpg" type="image/x-icon" />
        <meta name="keywords" content="墾丁三日遊" /> 
</head>

<?php
echo "<body bgcolor='#ffd9e6'>";
?>
    <div style="text-align:center; background-color:#ffb6c1; width:500px; height:50px; margin:0 auto;">
        <h1>墾丁三日遊</h1>
    </div>
    <div style = "background-color:#f5fffa">
        <h2>A套餐:極速高鐵】墾丁。自選酒店自由行3日</h2>
        <a href="https://www.colatour.com.tw/C10G_DomTour/C10G04_Feature.aspx?TourNo=2921&GASource=關鍵字">詳細活動內容</a>
        <div style="background-color:#FFD4FF; ">
        ◆費用:2200元起 </br>
        內含: </br>
            【交通】高鐵標準車廂來回車票。</br>
            【住宿】墾丁地區飯店住宿2晚。</br>
            【餐食】飯店早餐2次(依房型提供)。</br>
            【保險】200萬履約責任險暨20萬意外醫療險。</br>
        
        </div>
    </div>
    <img src="123.jpg" width="30%">
    <div style = "background-color:#f5fffa">
        <h2>B套餐:【極速高鐵-雙城記】墾丁X高雄 自選自由行3日</h2>
        <a href="https://www.colatour.com.tw/C10G_DomTour/C10G04_Feature.aspx?TourNo=9055&GASource=關鍵字">詳細活動內容</a>
        <div style="background-color:#FFD4FF; ">
        ◆費用:2300元起 </br>
        內含: </br>
        【交通】高鐵標準車廂來回車票。</br>
        【住宿】高雄飯店住宿1晚+墾丁飯店住宿1晚。</br>
        【餐食】飯店早餐2次(依房型提供)。</br>
        【保險】200萬履約責任險暨20萬意外醫療險。</br>
        </div>
    </div>
    <img src="456.jpg" width="30%">
    <div style = "background-color:#f5fffa">
        <h2>立即報名</h2>
        <div style="background-color:#FFD4FF; ">
        <form action="Sifnup.php" method="post">
            姓名:<input type="text" name="userName" > </br>
            E-mail:<input type="email" name="mail"> </br>
            電話:<input type="tel" name="tel"> </br>
            生理性別: Male<input type="radio" name="female"> Female<input type="radio" name="female"> </br>
            Food Preference: 葷<input type="checkbox" name="food"> 素<input type="checkbox" name="food"></br>
            Birthday: <input type="date" name="bir"> </br>

            T-shirt Size:
            <select name="city">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            </select>
            </br>
            T-shirt 顏色:<input type="color" name="pwd"> </br>
            套餐選擇: A套餐<input type="radio" name="trav"> B套餐<input type="radio" name="trav"> </br>
            總人數: <input type="number" name="peo"> </br>
            備註:
            </br>
            <textarea name="comment"></textarea>
            </br> <input type="submit">
        </form>
        </div>
    </div>
    <div style = "background-color:#f5fffa">
        <h2>T-shirt Size</h2>
        <div style="background-color:#FFD4FF; ">
        <table style="background-color: #f5fffa; border:3px #cccccc solid;" cellpadding="10" border='1'>
            <tr> 
                <th> </th> <th>S</th> <th>M</th> <th>L</th> <th>XL</th>
            </tr>
            <tr> 
                <td>width</td> <td>19"</td> <td>20"</td> <td>22"</td> <td>24"</td>
            </tr>
            <tr> 
                <td>height</td> <td>29"</td> <td>30"</td> <td>31"</td> <td>31.5"</td>
            </tr>
            <tr> 
                <td>length</td> <td>8"</td> <td>8.7"</td> <td>9</td> <td>9.4"</td>
            </tr>
        </table>
        </div>
    </div>

    

</body>
</html>
