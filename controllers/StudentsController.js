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
        const dataInput = {
            nama: req.body.nama,
            nim: req.body.nim,
            email: req.body.email,
            jurusan: req.body.jurusan,
            created_at : req.body.created_at,
            update_at : req.body.update_at,
        };
        const students = await Student.create(dataInput)
        const {nama} = req.body;
        const data = {
            message: `Menambahkan data student ${nama}`,
            data: students
        }
        res.json(data);
    }

    update(req, res) {
        const {
            id
        } = req.params
        const {
            nama
        } = req.body;

        const data = {
            message: `Mengedit data student ${id} namanya ${nama}`,
            data: []
        }
        res.json(data);
    }

    destroy(req, res) {
        const {
            id
        } = req.params

        const data = {
            message: `Mengapus student ${id}`,
            data: []
        }
        res.json(data);
    }
}

// buat object
const object = new StudentController();

module.exports = object;