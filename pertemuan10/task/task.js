/**
 * Fungsi untuk menampilkan hasil download
 * @param {string} result - Nama file yang didownload
 */
//  function showDownload(result) {
//     console.log("Download selesai");
//     console.log("Hasil Download: " + result);
//   }

const showDownload = () => {
    return new Promise((resolve) =>{
        setTimeout(() =>{
            resolve("Download selesai");
        }, 3000);
    });
};  
  /**
   * Fungsi untuk download file
   * @param {function} callback - Function callback show
   */
  // function download(callShowDownload) {
  //   setTimeout(function () {
  //     const result = "windows-10.exe";
  //     callShowDownload(result);
  //   }, 3000);
  // }

  const download = () =>{
    return new Promise((resolve) =>{
      setTimeout(() =>{
        resolve("Hasil Download : windows-10.exe");
      }, 3000);
    });
  };
  // download(showDownload);

  const main = async () => {
    console.log(await showDownload());
    console.log(await download());
  };
  main();
  /**
   * TODO:
   * - Refactor callback ke Promise atau Async Await
   * - Refactor function ke ES6 Arrow Function
   * - Refactor string ke ES6 Template Literals
   */