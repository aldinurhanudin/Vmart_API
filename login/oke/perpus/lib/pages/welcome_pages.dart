part of 'pages.dart';

class WellcomePage extends StatefulWidget {
  const WellcomePage({Key? key}) : super(key: key);

  @override
  _WellcomePageState createState() => _WellcomePageState();
}

class _WellcomePageState extends State<WellcomePage> {
  bool _isHidden = true;
  bool _isHiddenCourse = true;
  bool _isHiddenPassword = true;
  bool _isHiddenConfirmPassword = true;

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        backgroundColor: primaryColor,
        body: SafeArea(
          bottom: false,
          child: ListView(
            padding: EdgeInsets.symmetric(horizontal: defaultMargin),
            children: [
              Image.asset(
                'assets/images/login-image.png',
                height: 333,
                fit: BoxFit.fill,
              ),
              SizedBox(
                height: 15,
              ),
              Center(
                child: Text(
                  "Welcome",
                  style: dangerTextStyle,
                ),
              ),
              SizedBox(
                height: 15,
              ),
              Text(
                "Lorem ipsum dolor sit amet, \nconsectetur adipiscing elit, \nsed do eiusmod",
                textAlign: TextAlign.center,
                style: whiteTextStyle.copyWith(
                  fontSize: 20,
                ),
              ),
              SizedBox(
                height: 51,
              ),
              Container(
                height: 60,
                width: MediaQuery.of(context).size.width - 2 * defaultMargin,
                child: ElevatedButton(
                  onPressed: () {
                  
     // NOTE : TAMPILKAN MODAL REGISTER
                    showModalBottomSheet(
                        isDismissible: true,
                        enableDrag: true,
                        isScrollControlled: true,
                        context: context,
                        builder: (context) {
                          return StatefulBuilder(builder:
                              (BuildContext context, StateSetter setState) {
                            return Wrap(
                              children: [
                                Container(
                                  color: Colors.transparent,
                                  child: Container(
                                    decoration: BoxDecoration(
                                        color: secondaryColor,
                                        borderRadius: BorderRadius.only(
                                            topRight: Radius.circular(40),
                                            topLeft: Radius.circular(40))),
                                    child: Column(
                                      children: [
                                        Column(
                                          children: [
                                            SizedBox(height: defaultMargin),
                                            Padding(
                                              padding: EdgeInsets.symmetric(
                                                  horizontal: defaultMargin),
                                              child: Row(
                                                mainAxisAlignment:
                                                    MainAxisAlignment
                                                        .spaceBetween,
                                                children: [
                                                  Column(
                                                    crossAxisAlignment:
                                                        CrossAxisAlignment
                                                            .start,
                                                    children: [
                                                      Text(
                                                        "Hello...",
                                                        style: whiteTextStyle
                                                            .copyWith(
                                                                color:
                                                                    blackColor,
                                                                fontSize: 20),
                                                      ),
                                                      Text(
                                                        "Register",
                                                        style: dangerTextStyle
                                                            .copyWith(
                                                                color:
                                                                    blackColor,
                                                                fontSize: 30),
                                                      ),
                                                    ],
                                                  ),

                                                  // Button close
                                                  InkWell(
                                                    onTap: () {
                                                      Navigator.pop(context);
                                                    },
                                                    child: Image.asset(
                                                        'assets/images/close.png',
                                                        height: 30,
                                                        width: 30),
                                                  ),
                                                ],
                                              ),
                                            ),
                                            SizedBox(
                                              height: 25,
                                            ),
                                            Padding(
                                                padding: EdgeInsets.symmetric(
                                                    horizontal: defaultMargin),
                                                child: TextField(
                                                  obscureText: _isHidden,
                                                  decoration: InputDecoration(
                                                      border:
                                                          OutlineInputBorder(
                                                        borderRadius:
                                                            BorderRadius
                                                                .circular(10),
                                                      ),
                                                      hintText:
                                                          "info@example.com",
                                                      labelText:
                                                          'username/email',
                                                      suffixIcon: InkWell(
                                                        onTap:
                                                            _toogleUsernameView,
                                                        child: Icon(
                                                          _isHidden
                                                              ? Icons
                                                                  .visibility_outlined
                                                              : Icons
                                                                  .visibility_off_outlined,
                                                        ),
                                                      )),
                                                )),
                                            SizedBox(
                                              height: 20,
                                            ),
                                            Padding(
                                                padding: EdgeInsets.symmetric(
                                                    horizontal: defaultMargin),
                                                child: TextField(
                                                  obscureText: _isHiddenCourse,
                                                  decoration: InputDecoration(
                                                      border:
                                                          OutlineInputBorder(
                                                        borderRadius:
                                                            BorderRadius
                                                                .circular(10),
                                                      ),
                                                      hintText: "course",
                                                      labelText: 'course',
                                                      suffixIcon: InkWell(
                                                        onTap:
                                                            _toogleCourseView,
                                                        child: Icon(
                                                          _isHiddenCourse
                                                              ? Icons
                                                                  .visibility_outlined
                                                              : Icons
                                                                  .visibility_off_outlined,
                                                        ),
                                                      )),
                                                )),
                                            SizedBox(
                                              height: 20,
                                            ),
                                            Padding(
                                                padding: EdgeInsets.symmetric(
                                                    horizontal: defaultMargin),
                                                child: TextField(
                                                  obscureText:
                                                      _isHiddenPassword,
                                                  decoration: InputDecoration(
                                                      border:
                                                          OutlineInputBorder(
                                                        borderRadius:
                                                            BorderRadius
                                                                .circular(10),
                                                      ),
                                                      hintText: "password",
                                                      labelText: 'password',
                                                      suffixIcon: InkWell(
                                                        onTap:
                                                            _tooglePasswordView,
                                                        child: Icon(
                                                          _isHiddenPassword
                                                              ? Icons
                                                                  .lock_outline
                                                              : Icons
                                                                  .lock_open_outlined,
                                                        ),
                                                      )),
                                                )),
                                            SizedBox(
                                              height: 20,
                                            ),
                                            Padding(
                                                padding: EdgeInsets.symmetric(
                                                    horizontal: defaultMargin),
                                                child: TextField(
                                                  obscureText:
                                                      _isHiddenConfirmPassword,
                                                  decoration: InputDecoration(
                                                      border:
                                                          OutlineInputBorder(
                                                        borderRadius:
                                                            BorderRadius
                                                                .circular(10),
                                                      ),
                                                      hintText:
                                                          "confirm password",
                                                      labelText:
                                                          'confirm password',
                                                      suffixIcon: InkWell(
                                                        onTap:
                                                            _toogleConfirmPassword,
                                                        child: Icon(
                                                          _isHiddenConfirmPassword
                                                              ? Icons
                                                                  .lock_outline
                                                              : Icons
                                                                  .lock_open_outlined,
                                                        ),
                                                      )),
                                                )),
                                            SizedBox(
                                              height: 20,
                                            ),

                                            // NOTE: BUTTON REGISTER
                                            Padding(
                                              padding: EdgeInsets.symmetric(
                                                  horizontal: defaultMargin),
                                              child: Container(
                                                height: 60,
                                                width: MediaQuery.of(context)
                                                    .size
                                                    .width,
                                                child: ElevatedButton(
                                                  onPressed: () {},
                                                  child: Text('Register',
                                                      style: whiteTextStyle
                                                          .copyWith(
                                                              fontSize: 20,
                                                              fontWeight:
                                                                  FontWeight
                                                                      .w500,
                                                              color:
                                                                  secondaryColor)),
                                                  style: ElevatedButton.styleFrom(
                                                      primary: primaryColor,
                                                      shape:
                                                          RoundedRectangleBorder(
                                                              borderRadius:
                                                                  BorderRadius
                                                                      .circular(
                                                                          17))),
                                                ),
                                              ),
                                            ),
                                            SizedBox(height: 10),
                                            Row(
                                              mainAxisAlignment:
                                                  MainAxisAlignment.center,
                                              crossAxisAlignment:
                                                  CrossAxisAlignment.center,
                                              children: [
                                                Text("Already have account?",
                                                    style:
                                                        whiteTextStyle.copyWith(
                                                            color: primaryColor,
                                                            fontSize: 18)),
                                                Text(" Login",
                                                    style: dangerTextStyle
                                                        .copyWith(
                                                            fontSize: 18)),
                                              ],
                                            ),
                                            SizedBox(height: defaultMargin),
                                          ],
                                        ),
                                      ],
                                    ),
                                  ),
                                ),
                              ],
                            );
                          });
                        });

                  },
                  child: Text('Create Account',
                      style: whiteTextStyle.copyWith(
                          fontSize: 20,
                          fontWeight: FontWeight.w500,
                          color: primaryColor)),
                  style: ElevatedButton.styleFrom(
                      primary: secondaryColor,
                      shape: RoundedRectangleBorder(
                          borderRadius: BorderRadius.circular(17))),
                ),
              ),
              SizedBox(
                height: 15,
              ),
              Container(
                height: 60,
                width: MediaQuery.of(context).size.width - 2 * defaultMargin,
                child: ElevatedButton(
                  onPressed: () {},
                  child: Text('Login',
                      style: whiteTextStyle.copyWith(
                          fontSize: 20,
                          fontWeight: FontWeight.w500,
                          color: secondaryColor)),
                  style: ElevatedButton.styleFrom(
                      primary: primaryColor,
                      shape: RoundedRectangleBorder(
                          side: BorderSide(color: secondaryColor, width: 3),
                          borderRadius: BorderRadius.circular(17))),
                ),
              ),
              SizedBox(
                height: 36,
              ),
              Center(
                child: Text(
                  "All Right Reserved @2022",
                  style: whiteTextStyle.copyWith(
                      fontSize: 11, color: secondaryColor),
                ),
              ),
              SizedBox(
                height: defaultMargin,
              )
            ],
          ),
        ),
      ),
    );
  }

  void _toogleUsernameView() {
    setState(() {
      _isHidden = !_isHidden;
    });
  }

  void _toogleCourseView() {
    setState(() {
      _isHiddenCourse = !_isHiddenCourse;
    });
  }

  void _toogleConfirmPassword() {
    setState(() {
      _isHiddenConfirmPassword = !_isHiddenConfirmPassword;
    });
  }

  void _tooglePasswordView() {
    setState(() {
      _isHiddenPassword = !_isHiddenPassword;
    });
  }
}