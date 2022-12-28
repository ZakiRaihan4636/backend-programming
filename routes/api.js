// import Student Controller
const StudentController = require('../controllers/StudentsController')

// import express
const express = require('express');

// buat object router
const router = express.Router();

// buat routing student
router.get('/students', StudentController.index);

router.get('/students/:id', StudentController.show);

router.post('/students', StudentController.store);

router.put('/students/:id', StudentController.update);

router.delete('/students/:id', StudentController.destroy);

module.exports = router;
