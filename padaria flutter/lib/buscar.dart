import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

import 'menunavegacao.dart';

class Buscar extends StatelessWidget {
  const Buscar({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Menunavegacao(),
      appBar: AppBar(
        title: Text("Buscar"),
      ),
    );
  }
}