<html>

<body>

    <form action="<?= base_url('Latihan2/cetak'); ?>" method="post">
        <table border="1%">
            
            <tr>
                <th colspan="3">
                    Input Mata Kuliah
                </th>
            </tr>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode"></td>
            </tr>

            <tr>
                <td>Nama Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>

            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>

            <tr>                
                <td colspan="3"><input type="submit" name="submit" id="submit" value="submit"></td>
            </tr>

        </table>
    </form>

</body>    

</html>