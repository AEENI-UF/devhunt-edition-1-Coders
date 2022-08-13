<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return response()->json($etudiants, 200);
    }


    public function uploadContent(Request $request)
    {
        $file = $request->file('uploaded_file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filepath);
            $worksheet = $spreadsheet->getActiveSheet();
            $isHeader = 0;
            $looper = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($isHeader > 0) {
                    $dataToInsert = [];
                    $labels = [
                        'matricule',
                        'nom',
                        'prenoms',
                        'sexe',
                        'date_naiss',
                        'lieu_naiss',
                        'cin',
                        'tel',
                        'adresse',
                        'email',
                        'password',
                    ];
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(TRUE); // This loops through all cells,
                    //    even if a cell value is not set.
                    // For 'TRUE', we loop through cells
                    //    only when their value is set.
                    // If this method is not called,
                    //    the default value is 'false'.
                    foreach ($cellIterator as $cell) {
                        if ($cell->getValue() != "") {
                            $dataToInsert[$labels[$looper]] = $cell->getValue();
                            $looper++;
                        }
                    }
                    // return $dataToInsert;
                    $etudiant = new Etudiant($dataToInsert);
                    $etudiant->id_niveau = $request->input('id_niveau');
                    // var_dump($etudiant);
                    $etudiant->save();
                    $looper = 0;
                    // return;
                } else {
                    $isHeader = 1;
                }
            }
            return;
            // return response()->json($cellValue);



            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file
            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading
            $j = 0;
            foreach ($importData_arr as $importData) {

                $j++;
                try {
                    DB::beginTransaction();
                    Etudiant::create([
                        'matricule' => $importData[1],
                        'nom' => $importData[2],
                        'prenoms' => $importData[3],
                        'sexe' => $importData[4],
                        'date_naiss' => $importData[5],
                        'lieu_naiss' => $importData[6],
                        'cin' => $importData[7],
                        'tel' => $importData[8],
                        'adresse' => $importData[9],
                        'email' => $importData[10],
                        'password' => $importData[11],


                    ]);
                    DB::commit();
                } catch (\Exception $e) {

                    DB::rollBack();
                }
            }
            return response()->json([
                'message' => "$j records successfully uploaded",

            ]);
        } else {
            //no file was uploaded
            throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = array("csv", "xlsx"); //Voulez uniquement les fichiers csv et excel
        $maxFileSize = 2097152; // La limite de taille du fichier téléchargé est de 2 Mo
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); // erreur 413
            }
        } else {
            throw new \Exception('Extension de fichier invalide', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //Erreur 415
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::where('matricule',$id)->get();

         return response()->json($etudiant,200);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->update($request->all());

        return response()->json($etudiant,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return response()->json($etudiant,200);
    }
}
