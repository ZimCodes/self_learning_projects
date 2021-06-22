using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Mediator
{
    class Program
    {
        static void Main(string[] args)
        {
            King king = new King();
            Soldier neighborSoldier = new NeighborSoldier(king);
            Soldier soldier = new KingSoldier(king);
            soldier.PersonalRequest("I have no heart, but I have a lung can I sell it to you, your majesty?");
            Console.WriteLine();
            neighborSoldier.MSGOfTheLand("The people of our land respect you greatly.");
            Console.ReadLine();
        }
    }
}
