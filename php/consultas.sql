SELECT count(alumnos.carrera) as 'ISC' FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND alumnos.carrera='ISC' ORDER by bitacora.fecha;