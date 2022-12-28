const Student = require('../models/Student');

class StudentController {
    async index(req, res) {
        const students = await Student.all();
        const data = {
            message: "Menampilkan data student",
            data: students
        }
        res.json(data);
    }

    async store(req, res) {
    const { nama, nim, email, jurusan } = req.body;

    if (!nama || !nim || !email || !jurusan) {
        const data = {
         message: "semua data harus diisi",
      };
      return res.status(422).json(data);
    }
    const student = await Student.create(req.body);
    const data = {
        message: `Menambahkan data student : ${req.body.nama}`,
        data: student,
    };
    return res.status(201).json(data);
  }

    async show(req, res) {
        const { id } = req.params;
        const student = await Student.find(id);
        if (student) {
            const data = {
                message: `Get data students by id ${id}`,
                data: student,
            };
        res.status(200).json(data);

        } else {
            const data = {
                message: `Student not found`,
            };
        res.status(404).json(data);
        }
    }

    async update(req, res) {
        const { id } = req.params;

        const student = await Student.find(id);

        if (student) {
            const student = await Student.update(id, req.body);
            const data = {
                message: `Mengedit data students dengan id`,
                data: student,
            };
        res.status(200).json(data);
        } else {
            const data = {
                message: `Student tidak di temukan`,
            };
        res.status(404).json(data);
        }
    }

    async destroy(req, res){
        const { id } = req.params
        const student = await Student.find(id)

        if (student) {
            await Student.delete(id)
            const data = {
                message:"menghapus data students"
            }

            res.status(200).json(data)
        }else {
            const data = {
                message:"Student not found"
            }
            
            res.status(404).json(data)
        }
    }

    
}

// buat object
const object = new StudentController();

module.exports = object;