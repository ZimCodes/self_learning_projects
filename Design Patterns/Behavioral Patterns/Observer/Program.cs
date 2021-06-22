using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Observer
{
    class Program
    {
        static void Main(string[] args)
        {
            string input;
            Subject subject = new Subject();
            Observer observer1 = new Observer(subject);
            subject.Attach(observer1);
            while(true){
                Console.WriteLine("Which State would you like the subject to be? (sad/happy)");
                input = Console.ReadLine();
                switch (input.ToLower())
                {
                    case "sad":
                        subject.state = SubjectState.Sad;
                        subject.Notify();
                        break;
                    case "happy":
                        subject.state = SubjectState.Happy;
                        subject.Notify();
                        break;
                    default:
                        break;
                }
                Console.WriteLine(string.Format("Subject state: \"{0}\"",subject.state));
                Console.WriteLine(string.Format("Subject state: \"{0}\"", observer1.state));
                Console.ReadKey();
                Console.Clear();
            }
            
        }
    }
}
