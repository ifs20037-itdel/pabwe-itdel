// Nama File   : skripKu.js
// NIM         : 11S20037
// Kelas       : 13IF2

const tombol = document.querySelector(".btn");
const nama = document.querySelector(".name");
const text = document.querySelector(".text");
let sekul = document.querySelectorAll("input[name='mySchool']")
const tempat = document.querySelector(".myPlace");
const tanggal = document.querySelector(".myDate");
const jenis = document.querySelector(".myGender");
const sekolah = document.querySelectorAll(".mySchool");

const goar = document.querySelector(".nama");
const tl1 = document.querySelector(".tl1");
const tl2 = document.querySelector(".tl2");
const jk = document.querySelector(".jk");
const pend = document.querySelector(".pend");
const container = document.querySelector(".container");

const masuk = document.querySelectorAll("input");
const reload = document.querySelector(".reload");
const pilih = document.querySelector(".pilih");

container.style.display = "none";
tombol.addEventListener("click", function () {
    if(nama.value.length == 0){
        alert("Nama harus diisi");
        return;
    }
    else{
        container.classList.toggle("active");
        if(container.classList.contains("active")){
            container.style.display = "block";
        }
        if(nama.value.length < 7){
            alert("Nama Harus Memiliki Panjang Minimal 7 Karakter");
            container.style.display = "none";
            nama.value = "";
            return;
        }
        else{
            goar.innerHTML = nama.value;
            nama.value = "";
            nama.disabled = true;
            container.style.display = "block";
        }
    }
    tl1.innerHTML = tempat.value;
    tempat.value = "";
    tempat.disabled = true;
    tl2.innerHTML = tanggal.value;
    tanggal.value = "";
    tanggal.disabled = true;
    jk.innerHTML = jenis.value;
    jenis.value = "";
    jenis.disabled = true;

    tombol.disabled = true;
    if(tombol.disabled){
        reload.innerHTML = "<em>Reload Tab</em>";
        reload.style.color = "red";
    }
    for(let i = 0; i<sekolah.length; i++){
        // sekolah[i].checked = false;
        sekolah[i].disabled = true;
    }
    let findSelected = function() {
        const selected = document.querySelector("input[name='mySchool']:checked").value;
        pend.innerHTML = selected;
        // selected = null
        // console.log(selected);
        
        for(let i = 0; i<sekolah.length; i++){
            sekolah[i].checked = false;
            sekolah[i].disabled = true;
        }
    }
    sekul.forEach(skul =>{
        skul.addEventListener("change", findSelected);
    });
    findSelected();
})