$( document ).ready(function() {

    $(document).ready(function() {
        $('#role').on("change", function() {
            var roletype = $(this).val();
            optionswitch(roletype);
        });
        $('#jam').focus(function() { 
            $('#jam').mdtimepicker({
                timeFormat: 'hh:mm:ss.000', 
                format: 'h:mm tt',
                theme: 'blue',
                readOnly: true,
                hourPadding: false,
                clearBtn: false
          });
        });
    });
    function optionswitch(myfilter) {
        console.log(myfilter);
        if(myfilter == 'adak'){
            $('.nimajah').remove();
            $('.jurusanajah').remove();
        }
        if(myfilter == 'dosen'){
            $('.nimajah').remove();
            $('.jurusanajah').remove();
        }
        if(myfilter == 'mhs'){
            var container = document.createElement('div');
            container.setAttribute("class", "form-group nimajah");
            $(container).append('<label for="nim">NIM</label><input type="number" class="form-control" id="nim" placeholder="nim" name="nim" required autofocus>');
            $('.classnim').after(container);

            var container1 = document.createElement('div');
            container1.setAttribute("class", "form-group jurusanajah");
            $(container1).append('<label for="jurusan">jurusan</label><select class="form-control" name="jurusan" id="jurusan"><option value="ti">Teknik Informatika</option><option value="si">Sistem Informasi</option></select>');
            $('.classjurusan').after(container1);
        }
    }
    function parse_query_string(query) {
        var vars = query.split("&");
        var query_string = {};
        for (var i = 0; i < vars.length; i++) {
          var pair = vars[i].split("=");
          var key = decodeURIComponent(pair[0]);
          var value = decodeURIComponent(pair[1]);
          if (typeof query_string[key] === "undefined") {
            query_string[key] = decodeURIComponent(value);
          } else if (typeof query_string[key] === "string") {
            var arr = [query_string[key], decodeURIComponent(value)];
            query_string[key] = arr;
          } else {
            query_string[key].push(decodeURIComponent(value));
          }
        }
        return query_string;
      }
    $(".login").click(function(e){
        e.preventDefault();
        var username = jQuery('input[name="username"]').val();
        var password = jQuery('input[name="password"]').val();
        var role = jQuery('select[name="role"]').val()
        function openlink(role) {
            if(role == 'mhs'){
                window.location.replace('mhs/krs.php');
            }else if(role == 'dosen'){
                window.location.replace('dosen/read.php');
            }else if(role == 'adak'){
                window.location.replace('adak/index.php');
            }
        }
        if(username != '' && password != '' && role != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'auth/login.php',
                data:{username:username, password:password, role:role},
                error: function(e) {
                    var object = JSON.parse(e.responseText);
                    alert(object.message);
                  },
            }).done(function(data){
                alert('Login Success')
                openlink(role)
            });
        }else{
            alert('Ada data yang kosong')
        }
     
    });
    $(".register").click(function(e){
     
        e.preventDefault();
        var name = jQuery('input[name="nama"]').val(), 
            username = jQuery('input[name="username"]').val(),
            password = jQuery('input[name="password"]').val(),
            role = jQuery('select[name="role"]').val(),
            alamat = jQuery('input[name="alamat"]').val(),
            email = jQuery('input[name="email"]').val(),
            nim = (jQuery('input[name="nim"]').val() != null) ? jQuery('input[name="nim"]').val(): '',
            jurusan = (jQuery('select[name="jurusan"]').val() != null) ? jQuery('select[name="jurusan"]').val(): '';
        if(name != '' && username != '' && password != '' && role != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'auth/register.php',
                data:{name:name,username:username, password:password, role:role, nim:nim, jurusan:jurusan,alamat:alamat,email:email},
                error: function(e) {
                    var object = JSON.parse(e.responseText);
                    alert(object.message);
                  },
            }).done(function(data){
                alert('Data berhasil ditambah')
                window.location.replace('index.php');
            });
        }else{
            alert('Ada data yang kosong')
        }
     
    });
    $(".matkul").click(function(e){
     
        e.preventDefault();
        var kdmatkul = jQuery('input[name="kdmatkul"]').val(), 
            nmmatkul = jQuery('input[name="nmmatkul"]').val(),
            sks = jQuery('input[name="sks"]').val(),
            ruangan = jQuery('input[name="ruangan"]').val(),
            kelas = jQuery('input[name="kelas"]').val(),
            hari = jQuery('select[name="hari"]').val(),
            jam = jQuery('input[name="jam"]').val(),
            semester = jQuery('select[name="semester"]').val(),
            idDosen = jQuery('select[name="idDosen"]').val();
        if(kdmatkul != '' && nmmatkul != '' && sks != '' && ruangan != '' && kelas != '' && hari != '' && semester != '' && idDosen != '' && idDosen != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'php/create.php',
                data:{kdmatkul:kdmatkul,nmmatkul:nmmatkul,sks:sks,ruangan:ruangan,kelas:kelas,hari:hari,jam:jam,semester:semester,idDosen:idDosen},
                error: function(e) {
                    var object = JSON.parse(e.responseText);
                    alert(object.message);
                  },
            }).done(function(data){
                alert('Data berhasil ditambah')
                window.location.replace('index.php');
            });
        }else{
            alert('Ada data yang kosong')
        }
     
    });
    $(".dosen").click(function(e){
     
        e.preventDefault();
        var nama = jQuery('input[name="nama"]').val(), 
            email = jQuery('input[name="email"]').val(),
            alamat = $('textarea#alamat').val(),
            username = jQuery('input[name="username"]').val(),
            password = jQuery('input[name="password"]').val();
        if(nama != '' && email != '' && alamat != '' && username != '' && password != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'php/create.php',
                data:{nama:nama,email:email,alamat:alamat,username:username,password:password},
                error: function(e) {
                    var object = JSON.parse(e.responseText);
                    alert(object.message);
                  },
            }).done(function(data){
                alert('Data berhasil ditambah')
                window.location.replace('read.php');
            });
        }else{
            alert('Ada data yang kosong');
        }
     
    });
    $(".ubah").click(function(e){
        
        e.preventDefault();
        var query = window.location.search.substring(1);
        var qs = parse_query_string(query);
        var kdmatkul = jQuery('input[name="kdmatkul"]').val(), 
            nmmatkul = jQuery('input[name="nmmatkul"]').val(),
            sks = jQuery('input[name="sks"]').val(),
            ruangan = jQuery('input[name="ruangan"]').val(),
            kelas = jQuery('input[name="kelas"]').val(),
            hari = jQuery('select[name="hari"]').val(),
            jam = jQuery('input[name="jam"]').val(),
            semester = jQuery('select[name="semester"]').val(),
            idDosen = jQuery('select[name="idDosen"]').val();
        if(kdmatkul != '' && nmmatkul != '' && sks != '' && ruangan != '' && kelas != '' && hari != '' && semester != '' && idDosen != '' && idDosen != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'php/update.php',
                data:{id:qs.id,kdmatkul:kdmatkul,nmmatkul:nmmatkul,sks:sks,ruangan:ruangan,kelas:kelas,hari:hari,jam:jam,semester:semester,idDosen:idDosen},
                error: function(jqxhr, status, exception) {
                    var object = JSON.parse(jqxhr.responseText);
                    alert(object.message);
                  },
            }).done(function(data){
                alert('Data berhasil diupdate')
                window.location.replace('index.php');
            });
        }else{
            alert('Ada data yang kosong')
        }
     
    });
    $(".updatedosen").click(function(e){
        
        e.preventDefault();
        var query = window.location.search.substring(1);
        var qs = parse_query_string(query);
        var nama = jQuery('input[name="nama"]').val(), 
            email = jQuery('input[name="email"]').val(),
            alamat = $('textarea#alamat').val();
        if(nama != '' && email != '' && alamat != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'php/update.php',
                data:{id:qs.id,nama:nama,email:email,alamat:alamat},
                error: function(jqxhr, status, exception) {
                    var object = JSON.parse(jqxhr.responseText);
                    alert(object.message);
                  },
            }).done(function(data){
                alert('Data berhasil diupdate')
                window.location.replace('read.php');
            });
        }else{
            alert('Ada data yang kosong')
        }
     
    });
});