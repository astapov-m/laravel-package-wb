<?php
return[
  'date' => [
      'available' => date('Y-m-d', strtotime(date('Y-m-d',time()).' - 3 months')),
      'orders' => [
          'change' => date('Y-m-d', strtotime(date('Y-m-d',time()).' - 3 months')),
      ],
      'sales' => [
          'change' => date('Y-m-d', strtotime(date('Y-m-d',time()).' - 3 months')),
      ]
  ]
];

