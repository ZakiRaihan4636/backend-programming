
// import database
const db = require("../config/database");

// membuat class Model Student
class Student {
  /**
   * Membuat method static all.
   */
  static all() {
    // return Promise sebagai solusi Asynchronous
    return new Promise((resolve, reject) => {
      const sql = "SELECT * from students";
      /**
       * Melakukan query menggunakan method query.
       * Menerima 2 params: query dan callback
       */
      db.query(sql, (err, results) => {
        resolve(results);
      });
    });
  }
  /**
   * TODO 1: Buat fungsi untuk insert data.
   * Method menerima parameter data yang akan diinsert.
   * Method mengembalikan data student yang baru diinsert.
   */
  static create(data) {
    return new Promise((resolve, reject) => {
      const query = "Insert INTO students SET ?";

      db.query(query, data, (err, results) => {
        resolve(data)
      });
    });
  }

  static find(id) {
    return new Promise((resolve, reject) => {
      const query = `SELECT * FROM students WHERE id= ?`;
      db.query(query, id, (error, results) => {
        if (error) {
          reject(error);
        } else {
          const [student] = results;
          resolve(student);
        }
      });
    });
  }

  static async update(id, data) {
    await new Promise((resolve, reject) => {
      const query = `UPDATE students SET ? WHERE id = ?`;
      db.query(query, [data, id], (error, results) => {
        if (error) {
          reject(error);
        } else {
          resolve(results);
        }
      });
    });

    const student = await this.find(id);
    return student;
  }

  static async delete(id) {
   return new Promise((resolve, reject) => {
    const sql = "DELETE FROM students WHERE id = ?";
    db.query(sql, id, (err, results) => {
      resolve(results)
    });
   });
  }
}


// export class Student
module.exports = Student;