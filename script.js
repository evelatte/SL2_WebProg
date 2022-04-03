$("#form").submit(function(){
    let namadepan = $('#namadepan')
    let errormsg = document.getElementById('errormsg')
    let msg = document.getElementById("msg")
    msg.style.margin = '10px'

    if(!namadepan.val()){
        errormsg.innerHTML = "Nama Depan harus diisi";
        return false;
    }

    let tempatlahir = $('#tempatlahir')
    if(!tempatlahir.val()){
        errormsg.innerHTML = "Tempat Lahir harus diisi";
        return false;
    }

    let warganegara = $('#warganegara')
    if(!warganegara.val()){
        errormsg.innerHTML = "Warga Negara harus diisi";
        return false;
    }

    let alamat = $('#alamat')
    if(!alamat.val()){
        errormsg.innerHTML = "Alamat harus diisi";
        return false;
    }

    let username = $('#username')
    if(!username.val()){
        errormsg.innerHTML = "Username harus diisi";
        return false;
    }

    let namatengah = $('#namatengah')
    if(!namatengah.val()){
        errormsg.innerHTML = "Nama Tengah harus diisi";
        return false;
    }

    let tgllahir = document.getElementById("tgllahir").value;
    let birthdate = new Date(tgllahir)
    birthdate.setHours(0,0,0,0)
    let date = new Date()
    date.setHours(0,0,0,0)

    if(!Date.parse(tgllahir)){
        errormsg.innerHTML = "Tgl Lahir harus diisi";
        return false;
    }
    else if(birthdate >= date){
        errormsg.innerHTML = "Tgl Lahir invalid";
        return false;
    }

    let email = $('#email').val()
    if(!email){
        errormsg.innerHTML = "Invalid email";
        return false;
    }

    let kodepos = $('#kodepos').val()
    if(!kodepos){
        errormsg.innerHTML = "Kode pos harus diisi";
        return false;
    }

    let password1 = $('#password1').val()
    if(!password1){
        errormsg.innerHTML = "Password harus diisi <br> Minimal panjang 8 karakter";
        return false;
    }
    
    else if(password1.length < 8){
        errormsg.innerHTML = "Password minimal panjang 8 karakter";
        console.log(password1)
        return false;
    }
    
    let namabelakang = $('#namabelakang').val()
    if(!namabelakang){
        errormsg.innerHTML = "Nama Belakang harus diisi";
        return false;
    }

    let nik = $('#nik').val()
    if(!nik){
        errormsg.innerHTML = "NIK harus diisi";
        return false;
    }

    let nohp = $('#nohp').val()
    if(!nohp){
        errormsg.innerHTML = "No HP harus diisi"
        return false;
    }

    let file = $('#file').val()
    if(!file){
        errormsg.innerHTML = "Upload foto"
        return false;
    }

    let password2 = $('#password2').val()
    if(password2!=password1){
        errormsg.innerHTML = "Password harus sama"
        return false;
    }
});