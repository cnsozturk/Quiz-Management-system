using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static System.Console;


namespace Cansu
{
    internal class Program
    {
        public static int TotalDistance(int _speed, int _duration)
        {

            int distance = _speed * _duration;
        return distance;
        }
        public static double AverageFuel(double distance,double _gasconsumed)
         {
        double averageFuel = 100*_gasconsumed/distance;
            return averageFuel;
    }
    static void Main(string[] args)
        {
            string speed;
            string duration;
            string gasconsumed;
            int _speed;
            int _duration;
            int _gasconsumed;

            /*to ask users to input the necessary parameter(s), 
             * theteger) and gas speed (in km/h, integer) ,
             * duration (in hrs, in amount (in L, integer).*/
            WriteLine("Please input the speed of your car:");
            speed=ReadLine();
            _speed = int.Parse(speed);

            WriteLine("Please input the duration:");
            duration = ReadLine();
            _duration = int.Parse(duration);

            WriteLine("Please input the gas consumed:");
            gasconsumed = ReadLine();
            _gasconsumed = int.Parse(gasconsumed);
            /*Then calculate the total distance (in km, integer)
            * and average fuel cost (in L/100km, double).*/
            int theTotalDistance = TotalDistance(_speed, _duration);
            double theAverageFuel = AverageFuel(theTotalDistance, _gasconsumed);*/

            WriteLine("The total distance is: {0:2}" + theTotalDistance);
            WriteLine("The average fuel cost {0:2}:" + theAverageFuel  +"L/100km");

            ReadKey();


           
             /*Display your calculated results
              * (you can decide the format,
              * but the floating number will be displayed two digits).*/ 


        }
    }
}
