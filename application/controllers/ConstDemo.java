class ConstDemo

{
int empId;
int empSalary;
String empName;
ConstDemo()  //without parameter
{
empId=0;
empSalary=0.0f;
}


ConstDemo(int a,float b)    //with parameter
{
empId=a;
empSalary=b;
}



public static void main(String []args)
{
ConstDemo obj=new ConstDemo();
ConstDemo obj=new ConstDemo(1,2.5f);
}
}