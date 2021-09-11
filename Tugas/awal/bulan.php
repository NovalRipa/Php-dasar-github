<?php

echo "<h3>4. Program memilih bulan<br></h3>";

$bulan = date(10);
echo "Hari ini bulan $bulan <br>";
switch ($bulan) {
    case 1:
        echo "januari";
        break;

        case 2:
            echo "Febuari";
            break;

            case 3:
                echo "Maret";
                break;

                case 4 :
                    echo "April";
                    break;

                    case 5:
                        echo "Mei";
                        break;

                        case 6:
                            echo "Juni";
                            break;

                            case 7:
                                echo "Juli";
                                break ;

                                case 8:
                                    echo "Agustus";
                                    break;

                                    case 9:
                                        echo "September";
                                        break;

                                        case 10:
                                            echo "Oktober";
                                            break;

                                            case 11:
                                                echo "November";
                                                break;

                                                case 12 :
                                                    echo "Desember";
                                                    break;

                                
    default:
        echo "Bulan tidak ada";
        break;
}

?>