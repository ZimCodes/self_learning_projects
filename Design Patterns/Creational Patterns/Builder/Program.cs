using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    class Program
    {
        static void Main(string[] args)
        {
            RobotBuilder builder = new WoodenRobotBuilder();
            Director director = new Director(builder);
            director.BuildRobot();
            Console.WriteLine(director.getRobot().ToString());
            Console.ReadLine();
            
        }
    }
}
