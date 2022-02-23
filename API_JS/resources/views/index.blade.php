<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="m-2">
    <table class="min-w-full">
        <thead class="bg-gray-100 ">
            <tr>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    #
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                        Nombre
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                        Apellido
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                        Nacimiento
                </th>
                <th class="px-6 py-3 border-b border-gray-200  text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                        Acciones
                </th>
            </tr>
        </thead>
        <tbody id="listado-clientes" class="bg-white"></tbody>
    </table>

    <hr>

    <div class="container">

        <div class="row">
            <div class="col">
                <form id="formulario">
    
                    <h2>Formulario</h2>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                        <input id="nombre" name="nombre" type="text" placeholder="Nombre Cliente"/>
                    </div>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="apellido">Apellido</label>
                        <input id="apellido" name="apellido" type="text" placeholder="Apellido Cliente"/>
                    </div>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nacimiento">Nacimiento</label>
                        <input id="nacimiento" name="nacimiento" type="date" placeholder="Nacimiento Cliente"/>
                    </div>
            
                    <input type="submit" class="btn btn-success" value="Agregar Cliente"/>
            
                </form>
            </div>
            
            <div class="col">
                <form id="formularioUpdate">
        
                    <h2>Formulario Editar</h2>
            
                    <input type="hidden" id="idCliente">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombreUpdate">Nombre</label>
                        <input id="nombreUpdate" name="nombreUpdate" type="text" placeholder="Nombre Cliente"/>
                    </div>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="apellidoUpdate">Apellido</label>
                        <input id="apellidoUpdate" name="apellidoUpdate" type="text" placeholder="Apellido Cliente"/>
                    </div>
            
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nacimientoUpdate">Nacimiento</label>
                        <input id="nacimientoUpdate" type="date">
                    </div>
            
                    <input type="submit" class="btn btn-success" value="Editar Cliente"/>
            
                </form>
            </div>

            <div class="col">
                <div id="showCliente">
                    <h2>Info Cliente: </h2>
                    <label>Nombre: <p id="nombreShow"></p></label> 
                    <br>
                    <label>Apellido: <p id="apellidoShow"></p></label>
                    <br>
                    <label>Nacimiento: <p id="nacimientoShow"></p></label>
                    
                </div>
            </div>
        </div>

    </div>
    <script src="js/api.js"></script>
</body>
</html>