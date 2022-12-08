const persiapan = () => {
  setTimeout(function () {
    console.log("Persiapan ...");
  }, 3000);
};

const rebusAir = () => {
  setTimeout(function () {
    console.log("Rebus Air");
  }, 7000);
};

const masak = () => {
  setTimeout(function () {
    console.log("Memasak Mie");
    console.log("Selesai");
  }, 5000);
};

const main = () => {
  persiapan();
  rebusAir();
  masak();
};

main();