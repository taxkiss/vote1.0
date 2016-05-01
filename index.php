<html><head><title>2016年总统竞选</title></head>
<body>
<center>
    <form action="process.php" method="post">
    <table>
        <tr><td>希拉里<input type="radio" name="vote_elector_id" value=1601></td><td>特朗普<input type="radio" name="vote_elector_id" value=1602></td></tr>
        <tr>
        <td>地区编号<select name="vote_address_id">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select></td>
        <td>投票月份<select name="vote_month">
            <option value="1">1月</option>
            <option value="2">2月</option>
            <option value="3">3月</option>
            <option value="4">4月</option>
        </select></td></tr>
        <tr><td><input type="submit" value="投票"></td><td><input type="reset" value="重置"></td></tr>
    </table>
    </form>       
</center>


</body>
</html>