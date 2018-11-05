<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>

    <style>
    table, th , td {
      border: 1px solid grey;
      border-collapse: collapse;
      padding: 5px;
    }
    table tr:nth-child(odd) {
      background-color: #ffffff;
    }
    table tr:nth-child(even) {
      background-color: #afafaf;
    }
    </style>

  </head>
  <body>
    <div ng-app="myApp" ng-controller="myCtrl">
      My name is {{ (firstName + " " + lastName) | uppercase }}
      <br />
      <ul>
        <li ng-repeat="x in myData">
          {{x.Name}} - {{x.City}}, {{x.Country}}
        </li>
      </ul>

      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="x in myData | orderBy: 'City'">
            <td>{{ x.Name }}</td>
            <td>{{ x.City }}</td>
            <td>{{ x.Country }}</td>
          </tr>
        </tbody>
      </table>
<br /><br />

      <table>
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
          </tr>
        </thead>
        <tbody>
          <tr ng-repeat="x in myPHPData | orderBy: 'city'">
            <td>{{ x.firstName }}</td>
            <td>{{ x.lastName }}</td>
            <td>{{ x.city }}</td>
          </tr>
        </tbody>
      </table>

    </div>
  </body>
  <script src="myApp.js"></script>
  <script src="myCtrl.js"></script>
  <script src="table.php"></script>
</html>