<?php

use Illuminate\Database\Seeder;
use App\Train;


class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "Azienda" => "Trenitalia",
                "Stazione di partenza" => "Catania",
                "Stazione di arrivo" => "Reggio",
                "Orario di partenza"=>"16:30",
                "Orario di arrivo"=>"19:04",
                "Codice Treno" => "23238",
                "Numero Carrozze"=>"5",
                "In orario"=>false,
                "Cancellato"=>false,
                "NomeTreno" => "Andria-Toronto",
                "DataPartenza" => "2022-07-29",
                "OraPartenza" => ""
            ],
            [
                "Azienda" => "Trenitalia",
                "Stazione di partenza" => "Palermo",
                "Stazione di arrivo" => "Catania",
                "Orario di partenza"=>"12:30",
                "Orario di arrivo"=>"15:04",
                "Codice Treno" => "23239",
                "Numero Carrozze"=>"6",
                "In orario"=>false,
                "Cancellato"=>true,
                "NomeTreno" => "Palermo-Toronto",
                "DataPartenza" => "2022-07-29",
                "OraPartenza" => ""
            ],
            [
                "Azienda" => "Italo",
                "Stazione di partenza" => "Bergamo",
                "Stazione di arrivo" => "Torino",
                "Orario di partenza"=>"10:30",
                "Orario di arrivo"=>"20:04",
                "Codice Treno" => "23237",
                "Numero Carrozze"=>"7",
                "In orario"=>false,
                "Cancellato"=>false,
                "NomeTreno" => "Trapani-Toronto",
                "DataPartenza" => "2022-07-29",
                "OraPartenza" => ""
            ]

        ];

        foreach ($trains as $train) {
            $data = new Train();

            $data->Azienda = $train["Azienda"];

            $data->StazioneDiPartenza = $train["Stazione di partenza"];

            $data->StazioneDiArrivo = $train["Stazione di arrivo"];
            $data->OrarioDiPartenza = $train["Orario di partenza"];

            $data->OrarioDiArrivo = $train["Orario di arrivo"];

            $data->CodiceTreno = $train["Codice Treno"];

            $data->NumeroCarrozze = $train["Numero Carrozze"];

            $data->InOrario = $train["In orario"];
            $data->Cancellato = $train["Cancellato"];



            $data->save();
        }
    }
}
