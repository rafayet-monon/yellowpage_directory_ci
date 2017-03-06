class IFElseDemo

{
public static void main(String[] args){
int testscore=76;
char grade;
if (testscore>=90)
{
   grade='A';
}
else if (testscore>=80)
{
   grade='B';
}
if (testscore>=70)
{
   grade='C;
}
if (testscore>=60)
{
   grade='D';
}
System.out.println("Grade=" +grade);
}