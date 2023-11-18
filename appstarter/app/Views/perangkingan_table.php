<div class="p-4 sm:ml-64">
    <br><br>
    <h3
        class=" mb-4 mt-5 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-2xl dark:text-white">
        Perangkingan Lokasi Bisnis</h3>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Peringkat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Lokasi
                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">

                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    <!-- Your sort icon SVG here -->
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Maksimum
                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <!-- Your sort icon SVG here -->
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Minimum
                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <!-- Your sort icon SVG here -->
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nilai Yi
                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <!-- Your sort icon SVG here -->
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>



                </tr>
            </thead>
            <?php
            // Initialize an associative array to store values
            $storedValues = [];
            $Weight = [];

            foreach ($square as $result) {
                foreach ($result as $key => $value) {
                    // Store values in the associative array
                    $storedValues[$key] = $value;
                }
            }
            $count = 0;
            foreach ($bobot as $result) {
                $Weight[$count] = $result->value;

                $count++;
            }

            // Example of using the stored values outside the foreach loop
            $sumSquaredCriteriaOne = $storedValues['sum_squared_criteria_one'];
            $sumSquaredCriteriaTwo = $storedValues['sum_squared_criteria_two'];
            $sumSquaredCriteriaThree = $storedValues['sum_squared_criteria_three'];
            $sumSquaredCriteriaFour = $storedValues['sum_squared_criteria_four'];
            $sumSquaredCriteriaFive = $storedValues['sum_squared_criteria_five'];

            // ... repeat for other keys ...
            ?>
            <tbody>
                <?php
                $maxArray = [];
                $minArray = [];
                $yiArray = [];
                $locArray = [];
                $index = 0;

                ?>
                <?php foreach ($location as $row): ?>
                    <?php
                    // Get the values from the current row
                    $locArray[$index] = $row->location_data;
                    $criteriaOne = $row->criteria_one;

                    // Convert criteria_two
                    switch ($row->criteria_two) {
                        case 'Good':
                            $criteriaTwo = 4;
                            break;
                        case 'Enough':
                            $criteriaTwo = 3;
                            break;
                        case 'Less':
                            $criteriaTwo = 2;
                            break;
                        default:
                            $criteriaTwo = 1;
                    }

                    $criteriaThree = $row->criteria_three;
                    $criteriaFour = $row->criteria_four;

                    // Convert criteria_five
                    switch ($row->criteria_five) {
                        case 'Good':
                            $criteriaFive = 4;
                            break;
                        case 'Enough':
                            $criteriaFive = 3;
                            break;
                        case 'Less':
                            $criteriaFive = 2;
                            break;
                        default:
                            $criteriaFive = 1;
                    }

                    // Get the corresponding sum_squared values
                    // Perform the division
                    // $resultLocationData = ($sumSquaredCriteriaOne != 0) ? $locationData / $sumSquaredCriteriaOne : 0;
                    $resultCriteriaOne = ($sumSquaredCriteriaOne != 0) ? $criteriaOne / $sumSquaredCriteriaOne : 0;
                    $resultCriteriaTwo = ($sumSquaredCriteriaTwo != 0) ? $criteriaTwo / $sumSquaredCriteriaTwo : 0;
                    $resultCriteriaThree = ($sumSquaredCriteriaOne != 0) ? $criteriaThree / $sumSquaredCriteriaThree : 0;
                    $resultCriteriaFour = ($sumSquaredCriteriaOne != 0) ? $criteriaFour / $sumSquaredCriteriaFour : 0;
                    $resultCriteriaFive = ($sumSquaredCriteriaFive != 0) ? $criteriaFive / $sumSquaredCriteriaFive : 0;

                    $maxArray[$index] = ($resultCriteriaOne * $Weight[0]) + ($resultCriteriaTwo * $Weight[1]) + ($resultCriteriaThree * $Weight[2]);
                    ;
                    $minArray[$index] = ($resultCriteriaFour * $Weight[3]) + ($resultCriteriaFive * $Weight[4]);
                    ;
                    $yiArray[$index] = $maxArray[$index] - $minArray[$index];
                    ;
                    $index++;

                    ?>


                <?php endforeach; ?>
                <?php
                             
                $yiSort = $yiArray;
                $n = count($yiArray);
                $rankArr = range(1, $n);

                // Bubble sort
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($yiSort[$j] < $yiSort[$j + 1]) {
                            // Swap values in $yiSort
                            $temp = $yiSort[$j];
                            $yiSort[$j] = $yiSort[$j + 1];
                            $yiSort[$j + 1] = $temp;

                            // Swap indices in $rankArr
                            $temp = $rankArr[$j];
                            $rankArr[$j] = $rankArr[$j + 1];
                            $rankArr[$j + 1] = $temp;
                        }
                    }
                }

                // // Output the sorted array of values and the corresponding indices
                
                // var_dump($rankArr);
                  
                // echo count($rankArr);
                // sort array
               


                ?>
                
                <?php  $count = 0;
                $rank = 0;
                $length = count($maxArray);
                for ($x = 0; $x < $length ; $x++){ ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <!-- Your other table cells here -->

                        <!-- Example of displaying the result of the division -->
                        <td class="px-6 py-4 font-extrabold">
                            <?= $count + 1; ?>
                        </td>

                        <td class="px-6 py-4">
                            <?=  $locArray[$rankArr[$x]-1]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $maxArray[$rankArr[$x]-1]; ?>
                        </td>
                        <td class="px-6 py-4">
                        <?= $minArray[$rankArr[$x]-1]; ?>
                        </td>
                        <td class="px-6 py-4 font-extrabold">
                        <?= $yiArray[$rankArr[$x]-1]; ?>
                        </td>

                    </tr>
                    
                <?php $count++;
             }; ?>


            </tbody>
        </table>
    </div>
</div>