 <?php 
             class $nombrearchivoModel extends Model {

                /* declaracion  de variables de las tablas involucradas*/
                public $id;

                /* funcion para agregar movimiento */
                public function movisis(){
                    $sql = 'INSERT INTO log_acciones 
                    (idAccion, idUsuario, fecha)
                    VALUES(:idAccion, :idUsuario, :fecha)';
                    $user = [
                    'idAccion'         => $this->idAccion,
                    'idUsuario'         => IDUSUARIO,
                    'fecha'         => now()
                    ];
                    try { return (parent::query($sql, $user)) ? true : false; } 
                    catch (Exception $e) { throw $e; }
                }

              ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
              /* SECCION PARA _________________________ */
              ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

              /* consultar ________________*/
              public function ____________(){
                $sql = 'SELECT * FROM _____';
                try { return ($rows = parent::query($sql)) ? $rows : false; } 
                catch (Exception $e) { throw $e; }
              }

              /* agregar______________ */
              public function _______(){
                $sql = 'INSERT INTO ____ (______) VALUES(:________)';
                $user = [
                  '___'         => $this->____,
                  '____'         => $this->_____
                ];
                try { return (parent::query($sql, $user)) ? true : false; } 
                catch (Exception $e) { throw $e; }
              }

              /* eliminar */
              public function ______(){
                $sql = 'DELETE FROM ______ WHERE _______=:_______';
                $user = [
                  '_______'         => $this->_______,
                ];
                try { return (parent::query($sql, $user)) ? true : false; } 
                catch (Exception $e) { throw $e; }
              }

              /* editar */
              public function ______(){
                $sql = 'UPDATE _____ SET ____=:_____,  WHERE ________=:_______';
                $user = [
                  '_____' => $this->_____,
                  '_____' => $this->_____

                ];
                try { return (parent::query($sql, $user)) ? true : false; } 
                catch (Exception $e) { throw $e; }
              }
        }