using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace State
{
    class Program
    {
        static void Main(string[] args)
        {
            
            Gate gate = new Gate();
            Console.WriteLine("Current State: "+gate.ToString());
            gate.Pay();
            Console.WriteLine("Current State: " + gate.ToString());
            gate.PayFail();
            Console.WriteLine("Current State: " + gate.ToString());
            Console.ReadLine();
        }
    }
}
