import 'package:flutter/material.dart';
// import 'package:login_ui_master/pages/pages.dart';
// import 'package:login_ui_master/shared/shared.dart';
import 'package:perpus/pages/pages.dart';
import 'package:perpus/shared/shared.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        debugShowCheckedModeBanner: false,
        theme: ThemeData(
          // Ambil warna dari website : https://maketintsandshades.com/
          primarySwatch: ColorPalette.purpleColor,
          primaryColor: primaryColor,
          canvasColor: Colors.transparent,
        ),
        home: WellcomePage());
  }
}

class ColorPalette {
  static var purpleColor;
}